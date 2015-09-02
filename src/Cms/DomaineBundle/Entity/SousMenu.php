<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
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
    * @ORM\OneToMany(targetEntity="Cms\DomaineBundle\Entity\Document", mappedBy="sousmenu", cascade={"persist", "remove"})
    *
    */
    private $documents;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Cms\PageBundle\Entity\Page", inversedBy="sousmenus")
    *
    */
    private $page;

    /**
    * @ORM\OneToMany(targetEntity="Cms\PageBundle\Entity\Section", mappedBy="sousmenu", cascade={"persist", "remove"})
    *
    */
    private $sections;

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
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


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
        $photos->setSousmenu($this);

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
     * Set contenu
     *
     * @param string $contenu
     * @return SousMenu
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
     * Add sections
     *
     * @param \Cms\PageBundle\Entity\Section $sections
     * @return SousMenu
     */
    public function addSection(\Cms\PageBundle\Entity\Section $sections)
    {
        $this->sections[] = $sections;
        $sections->setSousmenu($this);
        return $this;
    }

    /**
     * Remove sections
     *
     * @param \Cms\PageBundle\Entity\Section $sections
     */
    public function removeSection(\Cms\PageBundle\Entity\Section $sections)
    {
        $this->sections->removeElement($sections);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Add documents
     *
     * @param \Cms\DomaineBundle\Entity\Document $documents
     * @return SousMenu
     */
    public function addDocument(\Cms\DomaineBundle\Entity\Document $documents)
    {
        $this->documents[] = $documents;
        $documents->setSousmenu($this);
    
        return $this;
    }

    /**
     * Remove documents
     *
     * @param \Cms\DomaineBundle\Entity\Document $documents
     */
    public function removeDocument(\Cms\DomaineBundle\Entity\Document $documents)
    {
        $this->documents->removeElement($documents);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
