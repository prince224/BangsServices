<?php

namespace Cms\DomaineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


use Cms\DomaineBundle\Entity\Section;

use Cms\DomaineBundle\Entity\Photo;
use Cms\DomaineBundle\Form\PhotoType;

use Cms\DomaineBundle\Entity\SousMenu;
use Cms\DomaineBundle\Form\SousMenuType;

class AdminController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$Pages = $em->getRepository('DomaineBundle:Page')->findAll();

        return $this->render('DomaineBundle:Admin:index.html.twig', array(
        	'Pages' => $Pages,
        	));
    }

    

    /*======================= Ajouter un menu pour une activité =============================================*/

    public function ajouter_menu_pageAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $Pages = $em->getRepository('DomaineBundle:Page')->findAll();

        $Page = $em->getRepository('DomaineBundle:Page')->find($idpage);

        $sousmenu = new SousMenu();

        $form = $this->createForm(new SousMenuType, $sousmenu);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $sousmenu = $form->getData();
                $em->persist($sousmenu);

                $Page->addSousmenu($sousmenu);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_page', array(
                    'idpage' => $Page->getId(),
                    )));
            }
        }

        return $this->render('DomaineBundle:Admin:ajouter_menu_page.html.twig', array(
            'form' => $form->createView(),
            'Page' => $Page,
            'Pages' => $Pages,
            ));

    }

    /*=================== Fin de l'ajout menu pour une activité ==============================================*/

}   
