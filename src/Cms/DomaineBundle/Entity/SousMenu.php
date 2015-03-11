<?php

namespace Cms\DomaineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousMenu
 *
 * @ORM\Table(name="sousmenu")
 * @ORM\Entity(repositoryClass="Cms\DomaineBundle\Entity\SousMenuRepository")
 */
class SousMenu
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
    * @ORM\ManyToOne(targetEntity="Cms\DomaineBundle\Entity\Categorie", inversedBy="sousmenus")
    *
    */
    private $categorie;

    /**
    *
    * @ORM\OneToMany(targetEntity="Cms\DomaineBundle\Entity\Photo", mappedBy="sousmenu", cascade={"persist", "remove"})
    *
    */
    private $photos;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     * @return SousMenu
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
     * Set categorie
     *
     * @param \Cms\DomaineBundle\Entity\Categorie $categorie
     * @return SousMenu
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
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photos
     *
     * @param \Cms\DomaineBundle\Entity\Photo $photos
     * @return SousMenu
     */
    public function addPhoto(\Cms\DomaineBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \Cms\DomaineBundle\Entity\Photo $photos
     */
    public function removePhoto(\Cms\DomaineBundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }
}
