<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\DomaineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cms\DomaineBundle\Entity\Menu;
use Cms\DomaineBundle\Entity\Photo;
use Cms\PageBundle\Entity\Page;
use Cms\ArticleBundle\Entity\Contenu;
use Cms\DomaineBundle\Entity\Logos;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'index'));

        return $this->render('DomaineBundle:Default:index.html.twig',array(
            'page_index' => $page_index,
            ));
    }


    /*================================ inserer menu ==========================================*/
    public function inserer_menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        return $this->render('DomaineBundle:Default:inserer_menu.html.twig',array(
            'menus' => $menus,
            ));
    }
    /* ==== fin inserer menu =====*/

    /*================================ inserer menu_page ==========================================*/
    public function inserer_menu_pageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        return $this->render('DomaineBundle:Default:inserer_menu_page.html.twig',array(
            'menus' => $menus,
            ));
    }
    /* ==== fin inserer menu page =====*/


    /*====inserer contact ====*/
    public function inserer_contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $contenus = $em->getRepository('ArticleBundle:Contenu')->findAll();

        return $this->render('DomaineBundle:Default:inserer_contact.html.twig',array(
            'contenus' => $contenus,
            ));
    }
    /* ==== fin inserer contact =====*/

    /*====inserer_reseaux_sociaux====*/
    public function inserer_reseaux_sociauxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $reseaux_sociaux = $em->getRepository('DomaineBundle:Logos')->findAll();

        return $this->render('DomaineBundle:Default:inserer_reseaux_sociaux.html.twig',array(
            'reseaux_sociaux' => $reseaux_sociaux,
            ));
    }
    /* ==== fin inserer_reseaux_sociaux=====*/

    /*============consulter page ===================*/
    public function consulter_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);
        $sous_menu = $page->getSousmenus();
        
        if($page != null)
        {
           return $this->render('DomaineBundle:Default:consulter_page.html.twig',array(
            'menus' => $menus,
            'page' => $page,
            'sous_menu' => $sous_menu,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
}
