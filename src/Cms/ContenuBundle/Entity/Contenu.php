<?php

namespace Cms\ContenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table(name="contenu")
 * @ORM\Entity(repositoryClass="Cms\ContenuBundle\Entity\ContenuRepository")
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

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

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
}
