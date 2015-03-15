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
use Cms\DomaineBundle\Form\MenuType;

use Cms\PageBundle\Entity\Page;
use Cms\PageBundle\Form\PageType;

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


    /*====inserer menu ====*/
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

    /*============consulter page ===================*/
    public function consulter_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);
        
        if($page != null)
        {
           return $this->render('DomaineBundle:Default:consulter_page.html.twig',array(
            'page' => $page)); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
}
