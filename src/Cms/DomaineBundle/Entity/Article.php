<?php

namespace Cms\DomaineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="Article")
 * @ORM\Entity(repositoryClass="Cms\DomaineBundle\Entity\ArticleRepository")
 */
class Article
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
    * @ORM\OneToMany(targetEntity="Cms\DomaineBundle\Entity\Photo", mappedBy="Article", cascade={"persist", "remove"})
    *
    */
    private $photos;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

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
     * @return Article
     */
    public function addPhoto(\Cms\DomaineBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;
        $photos->setArticle($this);

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
     * Set numero
     *
     * @param integer $numero
     * @return Article
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
}
