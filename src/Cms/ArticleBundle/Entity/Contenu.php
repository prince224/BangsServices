<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table(name="contenu")
 * @ORM\Entity(repositoryClass="Cms\ArticleBundle\Entity\ContenuRepository")
 */
class Contenu
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
    * @ORM\ManyToOne(targetEntity="Cms\ArticleBundle\Entity\Categorie", inversedBy="contenus")
    *
    */
    private $categorie;

    /**
    *
    * @ORM\OneToOne(targetEntity="Cms\DomaineBundle\Entity\Photo", cascade={"persist", "remove"})
    *
    */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;


    /**
     * @var string
     *
     * @ORM\Column(name="nompartenaire", type="string", length=255, nullable=true)
     */
    private $nompartenaire;

    /*================== Pour la categorie article, evenement =======================*/
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=true)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /*==================== Fin categorie article, evenemnt ======================= */

    /*================= pour la categorie services ================================*/

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /*==================== Fin categorie article, evenemnt ======================= */

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email_contact", type="string", length=255, nullable=true)
     */
    private $email_contact;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=true)
     */
    private $lien;

    /**
    *
    * @var boolean
    * @ORM\Column(name="publier", type="boolean", nullable=true)
    */
    private $publier;
    
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
     * Set titre
     *
     * @param string $titre
     * @return Contenu
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Contenu
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Contenu
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set categorie
     *
     * @param \Cms\ArticleBundle\Entity\Categorie $categorie
     * @return Contenu
     */
    public function setCategorie(\Cms\ArticleBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Cms\ArticleBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Contenu
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Contenu
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Contenu
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Contenu
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Contenu
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Contenu
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    
        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set email_contact
     *
     * @param string $emailContact
     * @return Contenu
     */
    public function setEmailContact($emailContact)
    {
        $this->email_contact = $emailContact;
    
        return $this;
    }

    /**
     * Get email_contact
     *
     * @return string 
     */
    public function getEmailContact()
    {
        return $this->email_contact;
    }

    /**
     * Set logos
     *
     * @param \Cms\DomaineBundle\Entity\Logos $logos
     * @return Contenu
     */
    public function setLogos(\Cms\DomaineBundle\Entity\Logos $logos = null)
    {
        $this->logos = $logos;
    
        return $this;
    }

    /**
     * Get logos
     *
     * @return \Cms\DomaineBundle\Entity\Logos 
     */
    public function getLogos()
    {
        return $this->logos;
    }

    

    /**
     * Set photo
     *
     * @param \Cms\DomaineBundle\Entity\Photo $photo
     * @return Contenu
     */
    public function setPhoto(\Cms\DomaineBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return \Cms\DomaineBundle\Entity\Photo 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nompartenaire
     *
     * @param string $nompartenaire
     * @return Contenu
     */
    public function setNompartenaire($nompartenaire)
    {
        $this->nompartenaire = $nompartenaire;
    
        return $this;
    }

    /**
     * Get nompartenaire
     *
     * @return string 
     */
    public function getNompartenaire()
    {
        return $this->nompartenaire;
    }


    /**
     * Set publier
     *
     * @param boolean $publier
     * @return Contenu
     */
    public function setPublier($publier)
    {
        $this->publier = $publier;
    
        return $this;
    }

    /**
     * Get publier
     *
     * @return boolean 
     */
    public function getPublier()
    {
        return $this->publier;
    }
}
