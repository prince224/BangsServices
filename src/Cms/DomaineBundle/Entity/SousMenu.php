<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1
*/
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
    * @ORM\ManyToOne(targetEntity="Cms\PageBundle\Entity\Page", inversedBy="sousmenus")
    *
    */
    private $page;

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
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set page
     *
     * @param \Cms\PageBundle\Entity\Page $page
     * @return SousMenu
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
