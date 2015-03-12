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
    	$categories = $em->getRepository('ArticleBundle:Categorie')->findAll();

        return $this->render('ArticleBundle:Admin:contenu_homepage.html.twig',array(
        	'contenus' => $contenus,
        	'categories' => $categories
        	));
    }

    /*===========Fin contenu homepage ==========================*/

    /*===========choix_categorie ==========================*/
    public function choix_categorieAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	if($request->getMethod() == 'POST')
    	{
  
    		$idcategorie = $_POST['categorie'];
   			$categorie = $em->getRepository('ArticleBundle:Categorie')->find($idcategorie);

   			return $this->redirect($this->generateUrl('article_admin_ajouter_un_contenu',array(
    		'categorie' => $categorie->getId(),
    		)));
    	}

    	return $this->redirect($this->generateUrl('article_admin_homepage'));

    }
    /*===========Fin choix_categorie ==========================*/

    /*===========ajouter_un_contenu ==========================*/
    public function ajouter_un_contenuAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$request = $this->getRequest();
    	$idcategorie = $request->query->get('categorie');

   		$categorie = $em->getRepository('ArticleBundle:Categorie')->find($idcategorie);

   		$contenu = new Contenu();
    	//$form = $this->createForm(new ContenuType, $contenu);

    	if ($categorie->getNom() == 'Article')
        {
    	   $form = $this->get('form.factory')->createBuilder('form', $contenu)
                        ->add('titre','text', array('label' => 'Titre *:'))
            
			            ->add('contenu', 'textarea', array(
			                'label' => 'Contenu',
			                'attr'=> array('class' => 'ckeditor')))

			            ->add('auteur', 'text', array(
			            	'label' => 'Auteur :'))

                        ->getForm();
                     ;
        }

        if ($categorie->getNom() == 'Service')
        {
    	   $form = $this->get('form.factory')->createBuilder('form', $contenu)
                        ->add('titre','text', array('label' => 'Prestation *:'))
            
			            ->add('description', 'textarea', array(
			                'label' => 'Contenu',
			                'attr'=> array('class' => 'ckeditor')))

			            ->add('prix')

                        ->getForm();
                     ;
        }

        if ($categorie->getNom() == 'Evenement')
        {
    	   $form = $this->get('form.factory')->createBuilder('form', $contenu)
                        ->add('titre','text', array('label' => 'Intitulé de l\'événement *:'))
            
			            ->add('contenu', 'textarea', array(
			                'label' => 'Contenu',
			                'attr'=> array('class' => 'ckeditor')))

			            ->add('auteur', 'text', array(
			            	'label' => 'Auteur :'))

			            ->add('dateDebut', 'date', array(
			            	'label' => 'Date de début :'))

			            ->add('dateFin', 'date', array(
			            	'label' => 'Date de fin :'))

                        ->getForm();
                     ;
        }

    	if($request->getMethod() == 'POST')
    	{
    		$form->bind($request);
    		if ($form->isValid()) {
    			
    			$contenu = $form->getData();
    			$contenu->setDateCreation(new \Datetime());

    			$em->persist($contenu);
    			$categorie->addContenus($contenu);

    			$em->flush();

    			return $this->redirect($this->generateUrl('article_admin_homepage'));
    		}
    	}
    	return $this->render('ArticleBundle:Admin:ajouter_un_contenu.html.twig',array(
    		'form' => $form->createView(),
    		'categorie' => $categorie,
    		));

    }
    /*===========Fin ajouter_un_contenu ==========================*/


}
