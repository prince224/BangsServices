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
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Cms\ArticleBundle\Entity\CategorieRepository")
 */
class Categorie
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
    * @ORM\ManyToMany(targetEntity="Cms\ArticleBundle\Entity\Article", cascade="persist")
    *
    */
    private $articles;

    /**
    *
    * @ORM\OneToMany(targetEntity="Cms\ArticleBundle\Entity\Contenu", mappedBy="categorie", cascade={"persist", "remove"})
    *
    */
    private $contenus;

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
     * @return Categorie
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
        $this->contenus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contenus
     *
     * @param \Cms\ArticleBundle\Entity\Contenu $contenus
     * @return Categorie
     */
    public function addContenus(\Cms\ArticleBundle\Entity\Contenu $contenus)
    {
        $this->contenus[] = $contenus;
        $contenus->setCategorie($this);
        return $this;
    }

    /**
     * Remove contenus
     *
     * @param \Cms\ArticleBundle\Entity\Contenu $contenus
     */
    public function removeContenus(\Cms\ArticleBundle\Entity\Contenu $contenus)
    {
        $this->contenus->removeElement($contenus);
    }

    /**
     * Get contenus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContenus()
    {
        return $this->contenus;
    }

   

    /**
     * Add articles
     *
     * @param \Cms\ArticleBundle\Entity\Article $articles
     * @return Categorie
     */
    public function addArticle(\Cms\ArticleBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Cms\ArticleBundle\Entity\Article $articles
     */
    public function removeArticle(\Cms\ArticleBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
