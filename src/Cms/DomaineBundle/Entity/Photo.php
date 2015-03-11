<?php

namespace Cms\DomaineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="Cms\DomaineBundle\Entity\PhotoRepository")
 * @ORM\HasLifecycleCallbacks
 *
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Cms\DomaineBundle\Entity\Categorie", inversedBy="photos")
    *
    */
    private $categorie;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Cms\DomaineBundle\Entity\SousMenu", inversedBy="photos")
    *
    */
    private $sousmenu;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Cms\DomaineBundle\Entity\Evenement", inversedBy="photos")
    *
    */
    private $evenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="onglet", type="integer", nullable = true)
     */
    private $onglet;

    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;

    /**
    * @Assert\File(maxSize="6000000")
    *
    */
    private $file;
    

    private $tempFilename;
   

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get file
     *
     *  
     */
    public function getFile()
    {
        return $this->file;
    }

    // On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
     
        // On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->url) 
        {
          // On sauvegarde l'extension du fichier pour le supprimer plus tard
          $this->tempFilename = $this->url;
     
          // On réinitialise les valeurs des attributs url et alt
          $this->url = null;
          $this->alt = null;
        }
    }

       /**
       * @ORM\PrePersist()
       * @ORM\PreUpdate()
       */
      public function preUpload()
      {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
          return;
        }
     
        // Le nom du fichier est son id, on doit juste stocker également son extension
        // Pour faire propre, on devrait renommer cet attribut en "extension", plutôt que "url"
       
        // $this->url = $this->file->guessExtension();
        $this->url = $this->file->getClientOriginalName();
        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->file->getClientOriginalName();
      }
     
      /**
       * @ORM\PostPersist()
       * @ORM\PostUpdate()
       */
      public function upload()
      {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
          return;
        }
            
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), // Le répertoire de destination
      $this->id.'.'.$this->alt   // Le nom du fichier à créer, ici "id.extension"
        );

        // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempFilename) {
          $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
          if (file_exists($oldFile)) {
            unlink($oldFile);
          }
        }
     
        
      }
     
      /**
       * @ORM\PreRemove()
       */
      public function preRemoveUpload()
      {
        // On sauvegarde temporairement le nom du fichier car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
      }
     
      /**
       * @ORM\PostRemove()
       */
      public function removeUpload()
      {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
          // On supprime le fichier
          unlink($this->tempFilename);
        }
      }
     
      public function getUploadDir()
      {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/img';
      }
     
      protected function getUploadRootDir()
      {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
      }
        
        public function getWebPath()
      {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
      }


    /**
     * Set url
     *
     * @param string $url
     * @return Photo
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Photo
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    
        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set categorie
     *
     * @param \Cms\DomaineBundle\Entity\Categorie $categorie
     * @return Photo
     */
    public function setCategorie(\Cms\DomaineBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Cms\DomaineBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set evenement
     *
     * @param \Cms\DomaineBundle\Entity\Evenement $evenement
     * @return Photo
     */
    public function setEvenement(\Cms\DomaineBundle\Entity\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \Cms\DomaineBundle\Entity\Evenement 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set section
     *
     * @param \Cms\DomaineBundle\Entity\Section $section
     * @return Photo
     */
    public function setSection(\Cms\DomaineBundle\Entity\Section $section = null)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \Cms\DomaineBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Photo
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set onglet
     *
     * @param integer $onglet
     * @return Photo
     */
    public function setOnglet($onglet)
    {
        $this->onglet = $onglet;

        return $this;
    }

    /**
     * Get onglet
     *
     * @return integer 
     */
    public function getOnglet()
    {
        return $this->onglet;
    }

    /**
     * Set sousmenu
     *
     * @param \Cms\DomaineBundle\Entity\SousMenu $sousmenu
     * @return Photo
     */
    public function setSousmenu(\Cms\DomaineBundle\Entity\SousMenu $sousmenu = null)
    {
        $this->sousmenu = $sousmenu;

        return $this;
    }

    /**
     * Get sousmenu
     *
     * @return \Cms\DomaineBundle\Entity\SousMenu 
     */
    public function getSousmenu()
    {
        return $this->sousmenu;
    }
}
