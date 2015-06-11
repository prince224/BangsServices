<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\ContenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Cms\ContenuBundle\Entity\Evenement;
use Cms\ContenuBundle\Form\EvenementType;

use Cms\ContenuBundle\Entity\Service;
use Cms\ContenuBundle\Form\ServiceType;


use Cms\DomaineBundle\Entity\Photo;
use Cms\DomaineBundle\Form\PhotoType;

use Cms\DomaineBundle\Entity\Logos;
use Cms\DomaineBundle\Form\LogosType;

class AdminController extends Controller
{
	/*===========Evenement homepage ==========================*/
    public function evenement_homepageAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$evenements = $em->getRepository('ContenuBundle:Evenement')->findAll();

        return $this->render('ContenuBundle:Admin:evenement_homepage.html.twig',array(
        	'evenements' => $evenements,
        	));
    }

    /*===========Fin Evenement homepage ==========================*/

    /*=========== voir_un_Evenement ==========================*/
    public function voir_un_evenementAction($idevenement)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);

        if($evenement != null)
        {
            return $this->render('ContenuBundle:Admin:voir_un_evenement.html.twig',array(
            'evenement' => $evenement,
            ));
        }
        return $this->redirect($this->generateUrl('evenement_admin_homepage'));
    }

    /*===========Fin  voir_un_Evenement ==========================*/

    /*===========ajouter_un_Evenement ==========================*/
    public function ajouter_un_evenementAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();

        $evenement = new Evenement();
        $form = $this->createForm(new EvenementType, $evenement);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $evenement = $form->getData();

                $em->persist($evenement);

                $em->flush();

                return $this->redirect($this->generateUrl('evenement_admin_voir_un_evenement',array(
                    'idevenement' => $evenement->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:ajouter_un_evenement.html.twig',array(
            'form' => $form->createView(),
            ));

    }
    /*===========Fin ajouter_un_Evenement==========================*/


    /*===========modifier_un_Evenement ==========================*/
    public function modifier_un_evenementAction($idevenement)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);
        $form = $this->createForm(new EvenementType, $evenement);


        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $Evenement = $form->getData();
                $Evenement->setDateCreation(new \Datetime());

                $em->flush();

                return $this->redirect($this->generateUrl('evenement_admin_voir_un_evenement',array(
                    'idevenement' => $evenement->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:modifier_un_evenement.html.twig',array(
            'form' => $form->createView(),
            ));

    }
    /*===========Fin modifier_un_Evenement ==========================*/

    /*=========== supprimer_un_Evenement ==========================*/
    public function supprimer_un_evenementAction($idevenement)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);

        if($evenement != null)
        {
            $em->remove($evenement);
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_admin_homepage'));
        }

        return $this->redirect($this->generateUrl('evenement_admin_homepage'));
    }

    /*===========Fin  supprimer_un_Evenement ==========================*/

     /*===================== ajouter_photo_Evenement ==========================================*/
    public function ajouter_photo_evenementAction($idevenement)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);
        $photo = new Photo();

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                //numero 2 pour les photos de l'Evenement
                $photo->setNumero('2');

                $em->persist($photo);
                $evenement->addPhoto($photo);

                $em->flush();

                return $this->redirect($this->generateUrl('evenement_admin_voir_un_evenement',array(
                    'idevenement' => $evenement->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:ajouter_photo_evenement.html.twig', array(
            'form' => $form->createView(),
            'evenement' => $evenement,
            ));
    }
    /*===================== Fin ajouter_photo_Evenement ==========================================*/

    /*===================== modifier_photo_Evenement ==========================================*/
    public function modifier_photo_evenementAction($idphoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $idevenement = $request->query->get('evenement');
        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idphoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $em->flush();

                return $this->redirect($this->generateUrl('evenement_admin_voir_un_evenement',array(
                    'idevenement' => $evenement->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:modifier_photo_evenement.html.twig', array(
            'form' => $form->createView(),
            'evenement' => $evenement,
            ));
    }
    /*===================== Fin modifier_photo_Evenement ==========================================*/

    /*===================== supprimer_photo_Evenement ==========================================*/
    public function supprimer_photo_evenementAction($idphoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $idevenement = $request->query->get('Evenement');
        $evenement = $em->getRepository('ContenuBundle:Evenement')->find($idevenement);

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idphoto);

        if($photo != null)
        {
            $em->remove($photo);

            $em->flush();

            return $this->redirect($this->generateUrl('evenement_admin_voir_un_evenement',array(
                    'idevenement' => $evenement->getId(),
                    )));
            
        }
        return $this->render('ContenuBundle:Admin:modifier_photo_evenement.html.twig', array(
            'form' => $form->createView(),
            'evenement' => $evenement,
            ));
    }
    /*===================== Fin supprimer_photo_Evenement ==========================================*/

    /*===========service homepage ==========================*/
    public function service_homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $services = $em->getRepository('ContenuBundle:Service')->findAll();

        return $this->render('ContenuBundle:Admin:service_homepage.html.twig',array(
            'services' => $services,
            ));
    }

    /*===========Fin service homepage ==========================*/

    /*=========== voir_un_service ==========================*/
    public function voir_un_serviceAction($idservice)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $service = $em->getRepository('ContenuBundle:Service')->find($idservice);

        if($service != null)
        {
            return $this->render('ContenuBundle:Admin:voir_un_service.html.twig',array(
            'service' => $service,
            ));
        }
        return $this->redirect($this->generateUrl('service_admin_homepage'));
    }

    /*===========Fin  voir_un_service ==========================*/

    /*===================== Ajouter_un_service =============================== */
    public function ajouter_un_serviceAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();

        $service = new Service();
        $form = $this->createForm(new ServiceType, $service);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $service = $form->getData();

                $em->persist($service);

                $em->flush();

                return $this->redirect($this->generateUrl('service_admin_voir_un_service',array(
                    'idservice' => $service->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:ajouter_un_service.html.twig',array(
            'form' => $form->createView(),
            ));
    }

    /*===================== Fin Ajouter_un_service =============================== */

    /*===========modifier_un_service ==========================*/
    public function modifier_un_serviceAction($idservice)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $service = $em->getRepository('ContenuBundle:Service')->find($idservice);
        $form = $this->createForm(new ServiceType, $service);


        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $service = $form->getData();

                $em->flush();

                return $this->redirect($this->generateUrl('service_admin_voir_un_service',array(
                    'idservice' => $service->getId(),
                    )));
            }
        }
        return $this->render('ContenuBundle:Admin:modifier_un_service.html.twig',array(
            'form' => $form->createView(),
            ));

    }
    /*===========Fin modifier_un_service ==========================*/

    /*=========== supprimer_un_service ==========================*/
    public function supprimer_un_serviceAction($idservice)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $service = $em->getRepository('ContenuBundle:Service')->find($idservice);

        if($service != null)
        {
            $em->remove($service);
            $em->flush();

            return $this->redirect($this->generateUrl('service_admin_homepage'));
        }

        return $this->redirect($this->generateUrl('service_admin_homepage'));
    }

    /*===========Fin  supprimer_un_Evenement ==========================*/

}   
