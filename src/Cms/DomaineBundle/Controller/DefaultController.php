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
        $$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Ball-trap'));

        $evenements = $em->getRepository('ContenuBundle:Evenement')->findAll();

        $sous_menu = $page_index->getSousmenus();

        $sections = $page_index->getSections();

        $partenaires = $em->getRepository('ArticleBundle:Contenu')->findAll();

        $date_jour = new \Datetime();

        return $this->render('DomaineBundle:trap_theme:index.html.twig',array(
            'page' => $page_index,
            'evenements' => $evenements,
            'sous_menu' => $sous_menu,
            'sections' => $sections,
            'partenaires' => $partenaires,
            'date_jour' => $date_jour,
            ));
    }

    /*================================ inserer inserer_logo_site==========================================*/
    public function inserer_logo_siteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $logo_site = $em->getRepository('DomaineBundle:Logos')->findOneBy(array(
            'nom' => 'logoSite'));

        return $this->render('DomaineBundle:trap_theme:inserer_logo_site.html.twig',array(
            'logo_site' => $logo_site,
            ));
    }
    /*===================Fin inserer logo =============================================== */ 


    /*================================ inserer menu ==========================================*/
    public function inserer_menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        return $this->render('DomaineBundle:trap_theme:inserer_menu.html.twig',array(
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

        return $this->render('DomaineBundle:trap_theme:inserer_menu_page.html.twig',array(
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

        return $this->render('DomaineBundle:trap_theme:inserer_contact.html.twig',array(
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

        return $this->render('DomaineBundle:trap_theme:inserer_reseaux_sociaux.html.twig',array(
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
        
        $partenaires = $em->getRepository('ArticleBundle:Contenu')->findAll();

        $sous_menu = $page->getSousmenus();

        if($page != null)
        {
            $sections = $page->getSections();

            //$articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

            return $this->render('DomaineBundle:trap_theme:consulter_page.html.twig',array(
            'page' => $page,
            'page_courant' => $page,
            'menus' => $menus,
            'sections' => $sections,
            //'articles' => $articles,
            'partenaires' => $partenaires,
            //'autres_articles' =>$autres_articles,
            'sous_menu' => $sous_menu,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }


    /*============================consulter_sous_menu=======================================*/
    public function consulter_sous_menuAction($idsousmenu)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $sous_menu_a_voir = $em->getRepository('DomaineBundle:SousMenu')->find($idsousmenu);
        
        $sections = $sous_menu_a_voir->getSections();
        $evenements = $em->getRepository('ContenuBundle:Evenement')->findAll();

        $page = $sous_menu_a_voir->getPage();
        $sous_menu = $page->getSousmenus();
        
        $partenaires = $em->getRepository('ArticleBundle:Contenu')->findAll();
        $date_jour = new \Datetime();

        if($sous_menu_a_voir != null)
        {
           return $this->render('DomaineBundle:trap_theme:consulter_sous_menu.html.twig',array(
            'sous_menu_a_voir' => $sous_menu_a_voir,
            'page' => $page,
            'evenements' => $evenements,
            'sous_menu' => $sous_menu,
            'sections' => $sections,
            'partenaires' => $partenaires,
            'date_jour' => $date_jour,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*================= Fin consulter_sous_menu ============================================*/

     /*============================consulter_evenement=======================================*/
    public function consulter_evenementAction($idevenement)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Ball-trap'));

        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);

        $sous_menu = $page_index->getSousmenus();

        $sections = $page_index->getSections();

        $partenaires = $em->getRepository('ArticleBundle:Contenu')->findAll();

        if($evenement != null)
        {
           return $this->render('DomaineBundle:trap_theme:consulter_evenement.html.twig',array(
            'page' => $page_index,
            'evenement' => $evenement,
            'sous_menu' => $sous_menu,
            'sections' => $sections,
            'partenaires' => $partenaires,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*================= Fin consulter_evenement ============================================*/

    /*============================consulter_article=======================================*/
    public function consulter_articleAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Ball-trap'));

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        $sous_menu = $page_index->getSousmenus();

        $sections = $page_index->getSections();

        $partenaires = $em->getRepository('ArticleBundle:Contenu')->findAll();

        if($article != null)
        {
           return $this->render('DomaineBundle:Default:consulter_article.html.twig',array(
            'page' => $page_index,
            'article' => $article,
            'sous_menu' => $sous_menu,
            'sections' => $sections,
            'partenaires' => $partenaires,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*================= Fin consulter_article ===========================================*/
}
