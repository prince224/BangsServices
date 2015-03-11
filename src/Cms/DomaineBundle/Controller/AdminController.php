<?php

namespace Cms\DomaineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Cms\DomaineBundle\Entity\Categorie;
use Cms\DomaineBundle\Form\CategorieType;

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

    	$categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        return $this->render('DomaineBundle:Admin:index.html.twig', array(
        	'categories' => $categories,
        	));
    }

    /*============== Ajouter une activité =========================================*/
    public function ajouter_une_activiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = new Categorie();

        $form = $this->createForm(new CategorieType, $categorie);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $categorie = $form->getData();

                $em->persist($categorie);
                $em->flush($categorie);

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
    	return $this->render('DomaineBundle:Admin:ajouter_une_activite.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*============== Fin de l'ajout d'une activité =========================================*/

    /*============== Modifier une activité =========================================*/
    public function modifier_une_activiteAction($idActivite)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);

        $form = $this->createForm(new CategorieType, $categorie);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $categorie = $form->getData();

                $em->flush($categorie);

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('DomaineBundle:Admin:modifier_une_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            ));
    }
    /*===================== Fin de la modification d'une activité ===================================*/

    /*===================== Supprimer une activité ==================================================*/
    public function supprimer_une_activiteAction($idActivite)
    {
    	$em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);

        if($categorie != null )
        {
            $em->remove($categorie);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_homepage'));

        }
       
        return $this->render('DomaineBundle:Admin:index.html.twig');
    }
    /*===================== Fin de la suppression d'une activité =====================================*/


    /*===================== Ajouter une image à une activité ==========================================*/
    public function ajouter_image_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $section = new Section();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);
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
                $categorie->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('DomaineBundle:Admin:ajouter_image_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            'categories' => $categories,
            ));
    }
    /*===================== Fin de l'ajout d'une image à une activité ==========================================*/


    /*===================== Mofifier une image à une activité ==========================================*/
    public function modifier_image_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $idPhoto = $request->query->get('idPhoto');

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);
        $photo = $em->getRepository('DomaineBundle:Photo')->find($idPhoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $categorie->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_homepage'));
            }
        }
        return $this->render('DomaineBundle:Admin:modifier_image_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            'categories' => $categories,
            ));
    }
    /*===================== Fin de la modification d'une image à une activité ==========================================*/

    /*===================== supprimer une image à une activité ==========================================*/
    public function supprimer_image_activiteAction($idPhoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idPhoto);

        if($photo != null )
        {
            $em->remove($photo);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_homepage'));

        }
       
        return $this->render('DomaineBundle:Admin:index.html.twig');         
    }
    /*===================== Fin de la suppression d'une image à une activité ===============================================*/




    /*=============================== Page d'accueil des Activitées du Cms ===============================================*/

    public function index_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $sousmenus = $em->getRepository('DomaineBundle:SousMenu')->findAll();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->findOneBy(array(
            'id' => $idActivite,
            ));

        $photos_bandeau = $em->getRepository('DomaineBundle:Photo')->findBy(array(
            'categorie' => $categorie,
            'numero' => 1,
            'onglet' => 0 ));

        if( $categorie != null || $categorie2 != null )
        {
            return $this->render('DomaineBundle:Admin:index_ball_trap.html.twig', array(
                'categories' => $categories,
                'categorie' => $categorie, 
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
    /*=============================== Fin page d'accueil Ball Trap du Cms ============================================*/


    /*===================== Ajouter une photo pour le bandeau de la page accueil ==========================================*/

    public function ajouter_bandeau_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);
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
                $categorie->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_activite', array(
                    'idActivite' => $categorie->getId(),
                    )));
            }
        }
        return $this->render('DomaineBundle:Admin:ajouter_bandeau_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            'categories' => $categories,
            ));
    }
    /*===================== Fin de l'ajout d'un bandeau page accueil ==========================================*/


    /*===================== modifier une photo pour le bandeau de la page accueil ==========================================*/

    public function modifier_bandeau_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $idPhoto = $request->query->get('idPhoto');

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idPhoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $categorie->addPhoto($photo);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_activite', array(
                    'idActivite' => $categorie->getId(),
                    )));
            }
        }
        return $this->render('DomaineBundle:Admin:modifier_bandeau_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            'categories' => $categories,
            ));
    }
    /*===================== Fin de la modification d'un bandeau page accueil ==========================================*/


    /*===================== supprimer bandeau activité ==========================================*/

    public function supprimer_bandeau_activiteAction($idActivite, $idPhoto)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);

        $photo_bandeau = $em->getRepository('DomaineBundle:Photo')->find($idPhoto);

        if($photo_bandeau != null )
        {
            $em->remove($photo_bandeau);
            $em->flush();
            
            //on fait une redirection vers la page d'accueil
            return $this->redirect($this->generateUrl('domaine_admin_voir_activite', array(
                    'idActivite' => $categorie->getId(),
                    )));

        }
       
        return $this->render('DomaineBundle:Admin:index.html.twig');         
    }
    /*===================== Fin de la suppression bandeau activité ==========================================*/


    /*======================= Ajouter un menu pour une activité =============================================*/

    public function ajouter_menu_activiteAction($idActivite)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $categories = $em->getRepository('DomaineBundle:Categorie')->findAll();

        $categorie = $em->getRepository('DomaineBundle:Categorie')->find($idActivite);

        $sousmenu = new SousMenu();

        $form = $this->createForm(new SousMenuType, $sousmenu);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $sousmenu = $form->getData();
                $em->persist($sousmenu);

                $categorie->addSousmenu($sousmenu);

                $em->flush();

                //on fait une redirection vers la page d'accueil
                return $this->redirect($this->generateUrl('domaine_admin_voir_activite', array(
                    'idActivite' => $categorie->getId(),
                    )));
            }
        }

        return $this->render('DomaineBundle:Admin:ajouter_menu_activite.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie,
            'categories' => $categories,
            ));

    }

    /*=================== Fin de l'ajout menu pour une activité ==============================================*/

}   
