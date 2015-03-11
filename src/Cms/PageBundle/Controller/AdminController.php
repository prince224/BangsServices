<?php

namespace Cms\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cms\PageBundle\Entity\Page;
use Cms\PageBundle\Form\PageType;


class AdminController extends Controller
{

	/*=============================== Page hompage du Cms ===============================================*/
    public function page_homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PageBundle:Page')->findAll();

        $sousmenus = $em->getRepository('PageBundle:SousMenu')->findBy(array(
        	'page' => $page));

        $photos_bandeau = $em->getRepository('PageBundle:Photo')->findBy(array(
            'Page' => $Page,
            'numero' => 1
            ));

        if( $Page != null)
        {
            return $this->render('PageBundle:Admin:page_homepage.html.twig', array(
                'Pages' => $Pages,
                'Page' => $Page, 
                'photos_bandeau' => $photos_bandeau,
                'sousmenus' => $sousmenus,
                ))
            ;
        }

        else
        {
            return new Response('non');
        }
        
    }
    /*=============================== Fin page homepage ============================================*/

    /*============== Ajouter une activité =========================================*/
    public function ajouter_une_pageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $Page = new Page();

        $form = $this->createForm(new PageType, $Page);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $Page = $form->getData();

                $em->persist($Page);
                $em->flush($Page);

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
    	return $this->render('PageBundle:Admin:ajouter_une_page.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*============== Fin de l'ajout d'une activité =========================================*/

    /*============== Modifier une activité =========================================*/
    public function modifier_une_pageAction($idpage)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);

        $form = $this->createForm(new PageType, $Page);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $Page = $form->getData();

                $em->flush($Page);

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('PageBundle:Admin:modifier_une_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            ));
    }
    /*===================== Fin de la modification d'une activité ===================================*/

    /*===================== Supprimer une activité ==================================================*/
    public function supprimer_une_pageAction($idpage)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);

        if($Page != null )
        {
            $em->remove($Page);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_homepage'));

        }
       
        return $this->render('PageBundle:Admin:index.html.twig');
    }
    /*===================== Fin de la suppression d'une activité =====================================*/


    /*===================== Ajouter une image à une activité ==========================================*/
    public function ajouter_image_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $Pages = $em->getRepository('PageBundle:Page')->findAll();

        $section = new Section();

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);
        $photo = new Photo();

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                //numero pour les photos de la page d'accueil du Domaine du Cms
                $photo->setNumero('0');

                $em->persist($photo);
                $Page->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('PageBundle:Admin:ajouter_image_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            'Pages' => $Pages,
            ));
    }
    /*===================== Fin de l'ajout d'une image à une activité ==========================================*/


    /*===================== Mofifier une image à une activité ==========================================*/
    public function modifier_image_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $Pages = $em->getRepository('PageBundle:Page')->findAll();

        $idPhoto = $request->query->get('idPhoto');

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);
        $photo = $em->getRepository('PageBundle:Photo')->find($idPhoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $Page->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('PageBundle:Admin:modifier_image_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            'Pages' => $Pages,
            ));
    }
    /*===================== Fin de la modification d'une image à une activité ==========================================*/

    /*===================== supprimer une image à une activité ==========================================*/
    public function supprimer_image_pageAction($idPhoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $photo = $em->getRepository('PageBundle:Photo')->find($idPhoto);

        if($photo != null )
        {
            $em->remove($photo);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_homepage'));

        }
       
        return $this->render('PageBundle:Admin:index.html.twig');         
    }
    /*===================== Fin de la suppression d'une image à une activité ===============================================*/

    /*===================== Ajouter une photo pour le bandeau de la page accueil ==========================================*/

    public function ajouter_bandeau_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $Pages = $em->getRepository('PageBundle:Page')->findAll();

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);
        $photo = new Photo();

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                //numéro 1 pour la première activité
                $photo->setNumero('1');

                //l'onglet 1 pour la page d'accueil
                $photo->setOnglet('0');

                $em->persist($photo);
                $Page->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_page', array(
                    'idpage' => $Page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:ajouter_bandeau_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            'Pages' => $Pages,
            ));
    }
    /*===================== Fin de l'ajout d'un bandeau page accueil ==========================================*/


    /*===================== modifier une photo pour le bandeau de la page accueil ==========================================*/

    public function modifier_bandeau_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $Pages = $em->getRepository('PageBundle:Page')->findAll();

        $idPhoto = $request->query->get('idPhoto');

        $Page = $em->getRepository('PageBundle:Page')->find($idpage);

        $photo = $em->getRepository('PageBundle:Photo')->find($idPhoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $Page->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_page', array(
                    'idpage' => $Page->getId(),
                    )));
            }
        }
        return $this->render('PageBundle:Admin:modifier_bandeau_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            'Pages' => $Pages,
            ));
    }
    /*===================== Fin de la modification d'un bandeau page accueil ==========================================*/


    /*===================== supprimer bandeau activité ==========================================*/

    public function supprimer_bandeau_pageAction($idpage, $idPhoto)
    {
        $em = $this->getDoctrine()->getManager();
        $Page = $em->getRepository('PageBundle:Page')->find($idpage);

        $photo_bandeau = $em->getRepository('PageBundle:Photo')->find($idPhoto);

        if($photo_bandeau != null )
        {
            $em->remove($photo_bandeau);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_voir_page', array(
                    'idpage' => $Page->getId(),
                    )));

        }
       
        return $this->render('PageBundle:Admin:index.html.twig');         
    }
    /*===================== Fin de la suppression bandeau activité ==========================================*/

}
