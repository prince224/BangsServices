<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1
*/
namespace Cms\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Cms\ArticleBundle\Entity\Contenu;
use Cms\ArticleBundle\Form\ContenuType;

use Cms\ArticleBundle\Entity\Categorie;
use Cms\ArticleBundle\Form\CategorieType;


class AdminController extends Controller
{
	/*===========contenu homepage ==========================*/
    public function contenu_homepageAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$contenus = $em->getRepository('ArticleBundle:Contenu')->findAll();

        return $this->render('ArticleBundle:Admin:contenu_homepage.html.twig',array(
        	'contenus' => $contenus));
    }

    /*===========Fin contenu homepage ==========================*/


    /*===========ajouter contenu ==========================*/
    public function ajouter_contenuAction()
    {

    }
    /*===========Fin ajouter contenu ==========================*/


}
