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
use Symfony\Component\HttpFoundation\Response;

use Cms\DomaineBundle\Entity\Photo;
use Cms\DomaineBundle\Form\PhotoType;

use Cms\DomaineBundle\Entity\Menu;
use Cms\DomaineBundle\Form\MenuType;

use Cms\DomaineBundle\Entity\SousMenu;
use Cms\DomaineBundle\Form\SousMenuType;

use Cms\ArticleBundle\Entity\Contenu;
use Cms\ArticleBundle\Form\ContenuType;

use Cms\DomaineBundle\Entity\Logos;
use Cms\DomaineBundle\Form\LogosType;

class AdminController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$pages = $em->getRepository('PageBundle:Page')->findAll();

        return $this->render('DomaineBundle:Admin:index.html.twig');
    }

    /*===================menu homepage ========================== */
    public function menu_homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();
        $pages = $em->getRepository('PageBundle:Page')->findAll();

        return $this->render('DomaineBundle:Admin:menu_homepage.html.twig',array(
            'menus' => $menus,
            'pages' => $pages,
            ));
    }
    /*===============Fin menu homepage===================*/

    /*===================ajouter menu ========================== */
    public function ajouter_menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menu = new Menu();

        if($request->getMethod() == 'POST')
        {
            $choix_pages = $_POST['choix'];
            if($choix_pages != null)
            {
                foreach ($choix_pages as $idChoix_page) {
                    $page = $em->getRepository('PageBundle:Page')->find($idChoix_page);
                    if($page != null)
                    {
                        $menu->addPage($page);
                        $menu->setNom('BS_menu');
                        $menu->setPosition(0);
                        
                        $em->persist($menu);
                    }
                }//end for
                $em->flush();

                return $this->redirect($this->generateUrl('domaine_admin_menu_homepage'));
            }
            
        }

        return $this->redirect($this->generateUrl('domaine_admin_menu_homepage'));
    }
    /*===============Fin ajouter menu===================*/

    /*===================modifier_nom menu ========================== */
    public function modifier_nom_menuAction($idmenu)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menu = $em->getRepository('DomaineBundle:Menu')->find($idmenu);

        $form = $this->createForm(new MenuType, $menu);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $menu= $form->getData();

                $em->flush();

                return $this->redirect($this->generateUrl('domaine_admin_menu_homepage'));
            }
            
        }

        return $this->render('DomaineBundle:Admin:modifier_nom_menu.html.twig', array(
            'form' =>$form->createView(),
            ));
    }
    /*===============Fin modifier_nom menu===================*/

    /*===================supprimer_page menu ========================== */
    public function supprimer_page_menuAction($idmenu)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menu = $em->getRepository('DomaineBundle:Menu')->find($idmenu);

        $idpage = $request->query->get('page');
        $page = $em->getRepository('PageBundle:Page')->find($idpage);

      
        if($menu != null and $page != null)
        {
            $menu->removePage($page);

            $em->flush();

            return $this->redirect($this->generateUrl('domaine_admin_menu_homepage'));
    
        }

        return $this->redirect($this->generateUrl('domaine_admin_menu_homepage'));
    }
    /*===============Fin supprimer_page menu===================*/


    /*===================== gestion_parametres ==========================================*/
    public function gestion_parametresAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $contenus = $em->getRepository('ArticleBundle:Contenu')->findAll();
        $logos = $em->getRepository('DomaineBundle:Logos')->findAll();


        return $this->render('DomaineBundle:Admin:gestion_parametres.html.twig',array(
            'contenus' => $contenus,
            'logos' => $logos
            ));
    }
    /*===================== Fin gestion_parametres ==========================================*/


    /*===================== parametre_ajouter_contact_contenu ==========================================*/
    public function parametre_ajouter_contact_contenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $contenu = new Contenu();

        $form = $this->get('form.factory')->createBuilder('form', $contenu)
                                  
                        ->add('telephone', 'text', array(
                            'label' => 'Numéro de téléphone :',))
                        ->getForm();
                     ;

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $contenu = $form->getData();

                $em->persist($contenu);

                $em->flush();

                return $this->redirect($this->generateUrl('domaine_admin_parametre_homepage'));
            }
        }
        return $this->render('DomaineBundle:Admin:parametre_ajouter_contact_contenu.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*===================== Fin parametre_ajouter_contact_contenu ==========================================*/

    /*===================== parametre_ajouter_reseaux_sociaux_contenu ==========================================*/
    public function parametre_ajouter_reseaux_sociaux_contenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $reseau_social = new Logos();

       $form = $this->createForm(new LogosType, $reseau_social);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $reseau_social = $form->getData();

                $em->persist($reseau_social);

                $em->flush();

                return $this->redirect($this->generateUrl('domaine_admin_parametre_homepage'));
            }
        }
        return $this->render('DomaineBundle:Admin:parametre_ajouter_reseaux_sociaux_contenu.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*===================== Fin parametre_ajouter_reseaux_sociaux_contenu ==========================================*/

}   
