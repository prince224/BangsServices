<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Cms\ArticleBundle\Entity\Article;
use Cms\ArticleBundle\Form\ArticleType;

use Cms\ArticleBundle\Entity\Categorie;
use Cms\ArticleBundle\Form\CategorieType;

use Cms\DomaineBundle\Entity\Photo;
use Cms\DomaineBundle\Form\PhotoType;

use Cms\DomaineBundle\Entity\Logos;
use Cms\DomaineBundle\Form\LogosType;

class AdminController extends Controller
{
	/*===========article homepage ==========================*/
    public function article_homepageAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$request = $this->getRequest();

    	$articles = $em->getRepository('ArticleBundle:Article')->findAll();
    	$categories = $em->getRepository('ArticleBundle:Categorie')->findAll();

        return $this->render('ArticleBundle:Admin:article_homepage.html.twig',array(
        	'articles' => $articles,
        	'categories' => $categories
        	));
    }

    /*===========Fin article homepage ==========================*/

    /*===========Page categorie ===============================*/
    public function page_categorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('ArticleBundle:Categorie')->findAll();

        if($categories != null)
        {
            return $this->render('ArticleBundle:Admin:page_categorie.html.twig', array(
                'categories' => $categories,
                ));

        }
        return $this->redirect($this->generateUrl('article_admin_homepage'));

    }
    /*=========== Fin page categorie =========================*/


    /*===========ajouter_une_categorie ===============================*/
    public function ajouter_une_categorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = new Categorie();
        $form = $this->createForm(new CategorieType, $categorie);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $categorie = $form->getData();
                $em->persist($categorie);

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_page_categorie'));
            }

        }

        return $this->render('ArticleBundle:Admin:ajouter_une_categorie.html.twig', array(
            'form' => $form->createView(),
            ));
    }
    /*=========== Fin ajouter_une_categorie =========================*/

    /*===========modifier_une_categorie ===============================*/
    public function modifier_une_categorieAction($idCategorie)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = $em->getRepository('ArticleBundle:Categorie')->find($idCategorie);
        $form = $this->createForm(new CategorieType, $categorie);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $categorie = $form->getData();
                $em->persist($categorie);

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_page_categorie'));
            }

        }

        return $this->render('ArticleBundle:Admin:modifier_une_categorie.html.twig', array(
            'form' => $form->createView(),
            'categorie' => $categorie
            ));
    }
    /*=========== Fin modifier_une_categorie =========================*/

    /*===========supprimer_une_categorie ===============================*/
    public function supprimer_une_categorieAction($idCategorie)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $categorie = $em->getRepository('ArticleBundle:Categorie')->find($idCategorie);

        if($categorie != null)
        {
            
            $em->remove($categorie);
            $em->flush();

            return $this->redirect($this->generateUrl('article_admin_page_categorie'));
        }

        return $this->redirect($this->generateUrl('article_admin_page_categorie'));
            
    }
    /*=========== Fin supprimer_une_categorie =========================*/

    /*=========== Choix_categorie ======================================*/
    public function choix_categorieAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        //$idarticle = $request->query->get('idarticle');
        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        if($request->getMethod() == 'POST')
        {
            $categories = $_POST['choix'];

            foreach ($categories as $idcategorie) {
                $categorie = $em->getRepository('ArticleBundle:Categorie')->find($idcategorie);

                $categorie->addArticle($article);

                $em->persist($categorie);
            }

            $em->flush();

            return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
            'idarticle' => $article->getId(),
            )));
        }

        return $this->redirect($this->generateUrl('article_admin_homepage'));

    }
    /*===========Fin choix_categorie ==========================*/

    /*=========== voir_un_article ==========================*/
    public function voir_un_articleAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        $categorie_article = $em->getRepository('ArticleBundle:Categorie')->getCategorie_article($article->getId());

        $categories = $em->getRepository('ArticleBundle:Categorie')->findAll();

        if($article != null)
        {
            return $this->render('ArticleBundle:Admin:voir_un_article.html.twig',array(
            'article' => $article,
            'categories' => $categories,
            'categorie_article' => $categorie_article,
            ));
        }
        return $this->redirect($this->generateUrl('article_admin_homepage'));
    }

    /*===========Fin  voir_un_article ==========================*/

    /*===========ajouter_un_article ==========================*/
    public function ajouter_un_articleAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();

        $article = new Article();
        $form = $this->createForm(new ArticleType, $article);

        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $article = $form->getData();

                $em->persist($article);

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
                    'idarticle' => $article->getId(),
                    )));
            }
        }
        return $this->render('ArticleBundle:Admin:ajouter_un_article.html.twig',array(
            'form' => $form->createView(),
            ));

    }
    /*===========Fin ajouter_un_article==========================*/


    /*===========modifier_un_article ==========================*/
    public function modifier_un_articleAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        $idcategorie = $request->query->get('idcategorie');

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);
        $form = $this->createForm(new articleType, $article);


        if($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $article = $form->getData();
                $article->setDateCreation(new \Datetime());

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
                    'idarticle' => $article->getId(),
                    )));
            }
        }
        return $this->render('ArticleBundle:Admin:modifier_un_article.html.twig',array(
            'form' => $form->createView(),
            ));

    }
    /*===========Fin modifier_un_article ==========================*/

    /*=========== supprimer_un_article ==========================*/
    public function supprimer_un_articleAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        if($article != null)
        {
            $em->remove($article);
            $em->flush();

            return $this->redirect($this->generateUrl('article_admin_homepage'));
        }

        return $this->redirect($this->generateUrl('article_admin_homepage'));
    }

    /*===========Fin  supprimer_un_article ==========================*/

     /*===================== ajouter_photo_article ==========================================*/
    public function ajouter_photo_articleAction($idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);
        $photo = new Photo();

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                //numero 2 pour les photos de l'article
                $photo->setNumero('2');

                $em->persist($photo);
                $article->addPhoto($photo);

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
                    'idarticle' => $article->getId(),
                    )));
            }
        }
        return $this->render('ArticleBundle:Admin:ajouter_photo_article.html.twig', array(
            'form' => $form->createView(),
            'article' => $article,
            ));
    }
    /*===================== Fin ajouter_photo_article ==========================================*/

    /*===================== modifier_photo_article ==========================================*/
    public function modifier_photo_articleAction($idphoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $idarticle = $request->query->get('article');
        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idphoto);

        $form = $this->createForm(new PhotoType, $photo);

        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            if($form->isValid())
            {
                $photo = $form->getData();

                $em->flush();

                return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
                    'idarticle' => $article->getId(),
                    )));
            }
        }
        return $this->render('ArticleBundle:Admin:modifier_photo_article.html.twig', array(
            'form' => $form->createView(),
            'article' => $article,
            ));
    }
    /*===================== Fin modifier_photo_article ==========================================*/

    /*===================== supprimer_photo_article ==========================================*/
    public function supprimer_photo_articleAction($idphoto)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $idarticle = $request->query->get('article');
        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        $photo = $em->getRepository('DomaineBundle:Photo')->find($idphoto);

        if($photo != null)
        {
            $em->remove($photo);

            $em->flush();

            return $this->redirect($this->generateUrl('article_admin_voir_un_article',array(
                    'idarticle' => $article->getId(),
                    )));
            
        }
        return $this->render('ArticleBundle:Admin:modifier_photo_article.html.twig', array(
            'form' => $form->createView(),
            'article' => $article,
            ));
    }
    /*===================== Fin supprimer_photo_article ==========================================*/

}
