<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1
*/
namespace Cms\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Cms\PageBundle\Entity\Page;
use Cms\PageBundle\Form\PageType;

use Cms\PageBundle\Entity\Section;
use Cms\PageBundle\Form\SectionType;

use Cms\ArticleBundle\Entity\Contenu;
use Cms\ArticleBundle\Form\ContenuType;



class AdminController extends Controller
{

	/*=============================== Page hompage du Cms ===============================================*/
    public function page_homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PageBundle:Page')->findAll();

       return $this->render('PageBundle:Admin:page_homepage.html.twig', array(
                'pages' => $pages, 
                ))
            ;
        
    }
    /*=============================== Fin page homepage ============================================*/

    /*=============================== voir une page ===============================================*/
    public function voir_une_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        $sousmenus = $em->getRepository('DomaineBundle:SousMenu')->findBy(array(
            'page' => $page));

        $sections = $em->getRepository('PageBundle:Section')->findBy(array(
            'page' => $page));

        $photo_carousel = $em->getRepository('DomaineBundle:Photo')->findBy(array(
            'page' =>$page,
            'numero' => 1
            ));

       return $this->render('PageBundle:Admin:voir_une_page.html.twig', array(
                'page' => $page,
                'sousmenus' => $sousmenus,
                'photo_carousel'=> $photo_carousel,
                'sections' => $sections,
                ))
            ;
        
    }
    /*=============================== Fin page voir une page ============================================*/


    /*============== Ajouter une page=========================================*/
    public function ajouter_une_pageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = new Page();

        $form = $this->createForm(new PageType, $page);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $page = $form->getData();

                $em->persist($page);
                $em->flush($page);

                //on fait une redirection vers la page homepage
                return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));
            }
        }
    	return $this->render('PageBundle:Admin:ajouter_une_page.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*============== Fin de l'ajout d'une page =========================================*/

    /*============== Modifier une page =========================================*/
    public function modifier_une_pageAction($idpage)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        $form = $this->createForm(new PageType, $page);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $page = $form->getData();

                $em->flush($page);

                //on fait une redirection vers la page homepage
                return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:modifier_une_page.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
            ));
    }
    /*===================== Fin de la modification d'une page ===================================*/

    /*===================== Supprimer une page ==================================================*/
    public function supprimer_une_pageAction($idpage)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        if($page != null )
        {
            $em->remove($page);
            $em->flush();
            
            //on fait une redirection vers page homepage
            return $this->redirect($this->generateUrl('Page_admin_homepage'));

        }
       
        //on fait une redirection vers page homepage
            return $this->redirect($this->generateUrl('Page_admin_homepage'));
    }
    /*===================== Fin de la suppression d'une page =====================================*/


    /*===================== Ajouter un carousel à une page ==========================================*/
    public function ajouter_image_carousel_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);
        $section = new section();

        $form = $this->createForm(new sectionType, $section);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $section = $form->getData();

                //numero 1 pour les sections du carousel
                $section->setNumero('1');

                $em->persist($section);
                $page->addsection($section);

                $em->flush();

                //on fait une redirection vers la page homepage
                return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:ajouter_image_carousel_page.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
            ));
    }
    /*===================== Fin de l'ajout image carousel page ==========================================*/


    /*===================== Mofifier une image à une page ==========================================*/
    public function modifier_image_carousel_pageAction($idsection)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $section = $em->getRepository('DomaineBundle:section')->find($idsection);
        $page = $section->getPage();

        $form = $this->createForm(new sectionType, $section);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $section = $form->getData();

                $page->addsection($section);

                $em->flush();

                //on fait une redirection vers la page homepage
                return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:modifier_image_carousel_page.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
            ));
    }
    /*===================== Fin modification image carousel ==========================================*/

    /*===================== supprimer une image carousel==========================================*/
    public function supprimer_image_carousel_pageAction($idsection)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $section = $em->getRepository('DomaineBundle:section')->find($idsection);
        $page = $section->getPage();

        if($section != null )
        {
            $em->remove($section);
            $em->flush();
            
            //on fait une redirection vers la page homepage
            return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));

        }
       
        //on fait une redirection vers la page homepage
            return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    ))); 
    }
    /*===================== Fin de la suppression d'une image carousel ===============================================*/

        
    /*===================== ajouter_section_page==========================================*/
    public function ajouter_section_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        $section = new Section();

        $form = $this->createForm(new SectionType, $section);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $section = $form->getData();

               // $section->addCategory($categories);

                $em->persist($section);
                $page->addSection($section);

                $em->flush();

                //on fait une redirection vers la page homepage
                return $this->redirect($this->generateUrl('Page_admin_voir_une_page', array(
                    'idpage' => $page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:ajouter_section_page.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
            ));
    }
    /*===================== Fin ajouter_section_page ==========================================*/



}
