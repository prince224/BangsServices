<?php

namespace Cms\DomaineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="Page")
 * @ORM\Entity(repositoryClass="Cms\DomaineBundle\Entity\PageRepository")
 */
class Page
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
    * @ORM\OneToMany(targetEntity="Cms\DomaineBundle\Entity\Photo", mappedBy="Page", cascade={"persist", "remove"})
    *
    */
    private $photos;

    /**
    *
    * @ORM\OneToMany(targetEntity="Cms\DomaineBundle\Entity\SousMenu", mappedBy="Page", cascade={"persist", "remove"})
    *
    */
    private $sousmenus;

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
     * @return Page
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
     * @return Page
     */
    public function addPhoto(\Cms\DomaineBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;
        $photos->setPage($this);

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

    /**
     * Add sousmenus
     *
     * @param \Cms\DomaineBundle\Entity\SousMenu $sousmenus
     * @return Page
     */
    public function addSousmenu(\Cms\DomaineBundle\Entity\SousMenu $sousmenus)
    {
        $this->sousmenus[] = $sousmenus;
        $sousmenus->setPage($this);

        return $this;
    }

    /**
     * Remove sousmenus
     *
     * @param \Cms\DomaineBundle\Entity\SousMenu $sousmenus
     */
    public function removeSousmenu(\Cms\DomaineBundle\Entity\SousMenu $sousmenus)
    {
        $this->sousmenus->removeElement($sousmenus);
    }

    /**
     * Get sousmenus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousmenus()
    {
        return $this->sousmenus;
    }
}
