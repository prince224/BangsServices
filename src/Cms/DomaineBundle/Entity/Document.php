<?php

namespace Cms\DomaineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="Cms\DomaineBundle\Entity\DocumentRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Document
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
    * @ORM\ManyToOne(targetEntity="Cms\PageBundle\Entity\Page", inversedBy="documents")
    *
    */
    private $page;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Cms\DomaineBundle\Entity\SousMenu", inversedBy="documents")
    *
    */
    private $sousmenu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
    * @Assert\File(maxSize="6000000")
    *
    */
    private $file;

    private $filetemporaire;

    /**
    * Get file
    *
    */
    public function getFile(){
        return $this->file;
    }
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->nom) 
        {
          // On sauvegarde l'extension du fichier pour le supprimer plus tard
          $this->filetemporaire = $this->extension;
     
          // On réinitialise les valeurs des attributs 
          $this->nom = null;
          $this->extension = null;
        }
    }

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
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    *
    */
    public function preUpload(){

        if($this->file === null){
            return;
        }

        $this->nom = $this->file->getClientOriginalName();
        $this->extension = $this->file->getExtension();

    } //fin du preUpload
    
    /**
    * @ORM\PostPersist()
    * @ORM\PostUpdate()
    *
    */
    public function upload(){

        if($this->file === null){
            return;
        }

        $this->file->move($this->getUploadRootDir(), $this->nom);

    }

    /**
    * @ORM\PreRemove()
    * 
    */
    public function AvanSupp()
    {

        if($this->file === null)
        {
            return;
        }
        $filetemporaire = $this->getUploadRootDir().'/'.$this->id.'.'.$this->extension;

    }

    /**
    * @ORM\PostRemove()
    * 
    */
    public function suppression()
    {
        if(file_exists($this->filetemporaire))
        {
            unlink($this->filetemporaire);
        }
    }

    public function getUploadDir()
    {
        return 'uploads/documents';
    }

    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return $this->getUploadRootDir().'/'.$this->getNom();
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Documents
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Documents
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }


    /**
     * Set page
     *
     * @param \Cms\PageBundle\Entity\Page $page
     * @return Document
     */
    public function setPage(\Cms\PageBundle\Entity\Page $page = null)
    {
        $this->page = $page;
    
        return $this;
    }

    /**
     * Get page
     *
     * @return \Cms\PageBundle\Entity\Page 
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set sousmenu
     *
     * @param \Cms\DomaineBundle\Entity\SousMenu $sousmenu
     * @return Document
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
