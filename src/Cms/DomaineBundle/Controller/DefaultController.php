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
use Cms\ContenuBundle\Entity\Contenu;
use Cms\DomaineBundle\Entity\Logos;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Accueil'));

        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $evenements = $em->getRepository('ContenuBundle:Evenement')->findAll();

        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $sous_menu = $page_index->getSousmenus();

        $sections = $page_index->getSections();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        $services = $em->getRepository('ContenuBundle:Service')->findAll();

        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();

        $team = $em->getRepository('ContenuBundle:Equipe')->findAll();

        $date_jour = new \Datetime();

        return $this->render('DomaineBundle:business_theme:index.html.twig',array(
            'page' => $page_index,
            'mentions_legales' => $page_mention_legale,
            'services'=> $services,
            'articles' => $articles,
            'publications' => $publications,
            'menus' => $menus,
            'page_formation' => $page_formation,
            'evenements' => $evenements,
            'sous_menu' => $sous_menu,
            'partenaires' => $partenaires,
            'team' => $team,
            'date_jour' => $date_jour,
            'metier_consulting' => $metier_consulting,
            'metier_services' => $metier_services,
            'metier_formations' => $metier_formations,
            ));
    }

    /*================================ inserer inserer_logo_site==========================================*/
    public function inserer_logo_siteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $logo_site = $em->getRepository('DomaineBundle:Logos')->findOneBy(array(
            'nom' => 'logoSite'));

        return $this->render('DomaineBundle:business_theme:inserer_logo_site.html.twig',array(
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

        return $this->render('DomaineBundle:business_theme:inserer_menu_page.html.twig',array(
            'menus' => $menus,
            ))
        ;
    }
    /* ==== fin inserer menu page =====*/


    /*====inserer contact ====*/
    public function inserer_contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $contenus = $em->getRepository('ContenuBundle:Contenu')->findAll();

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
    public function consulter_pageAction($nom, $idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        $services = $em->getRepository('ContenuBundle:Service')->findAll();

        $page = $em->getRepository('PageBundle:Page')->find($idpage);
        
        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();

        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));
        //$sous_menu = $page->getSousmenus();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        if($page != null)
        {
            if ($page->getNom() == 'Accueil') {
               return $this->redirect($this->generateUrl('domaine_homepage'));
            }
            $sections = $page->getSections();
            
            $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

            $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

            return $this->render('DomaineBundle:business_theme:consulter_page.html.twig',array(
            'page_courant' => $page,
            'mentions_legales' => $page_mention_legale,
            'menus' => $menus,
            'page_formation' => $page_formation,
            'services' => $services,
            'sections' => $sections,
            'articles' => $articles,
            'publications' => $publications,
            'partenaires' => $partenaires,
            //'autres_articles' =>$autres_articles,
            //'sous_menu' => $sous_menu,
            'metier_consulting' => $metier_consulting,
            'metier_services' => $metier_services,
            'metier_formations' => $metier_formations,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*===========================Fin consulter page ========================================*/

    /*============================consulter_sous_menu=======================================*/
    public function consulter_sous_menuAction($nom, $idsousmenu)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $sous_menu_a_voir = $em->getRepository('DomaineBundle:SousMenu')->find($idsousmenu);
        
        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        //$sections = $sous_menu_a_voir->getSections();
        $evenements = $em->getRepository('ContenuBundle:Evenement')->findAll();

        $services = $em->getRepository('ContenuBundle:Service')->findAll();
        
        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $page = $sous_menu_a_voir->getPage();
        $sous_menu = $page->getSousmenus();
        
        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();
        $date_jour = new \Datetime();

        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        if($sous_menu_a_voir != null)
        {
           return $this->render('DomaineBundle:business_theme:consulter_sous_menu.html.twig',array(
            'sous_menu_a_voir' => $sous_menu_a_voir,
            'mentions_legales' => $page_mention_legale,
            'menus' => $menus,
            'page' => $page,
            'page_formation' => $page_formation,
            'services' => $services,
            'articles' => $articles, 
            'publications' => $publications,
            'evenements' => $evenements,
            'sous_menu' => $sous_menu,
            //'sections' => $sections,
            'partenaires' => $partenaires,
            'date_jour' => $date_jour,
            'metier_consulting' => $metier_consulting,
            'metier_services' => $metier_services,
            'metier_formations' => $metier_formations,
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

        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();

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
    public function consulter_articleAction($titre, $idarticle)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Accueil'));

        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $article = $em->getRepository('ArticleBundle:Article')->find($idarticle);

        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();

        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));

        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));

        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        if($article != null)
        {
           return $this->render('DomaineBundle:business_theme:consulter_article.html.twig',array(
            'page' => $page_index,
            'mentions_legales' => $page_mention_legale,
            'article' => $article,
            'articles' => $articles,
            'publications' => $publications,
            'menus' => $menus,
            'page_formation' => $page_formation,
            //'sous_menu' => $sous_menu,
            //'sections' => $sections,
            'partenaires' => $partenaires,
            'metier_consulting' => $metier_consulting,
            'metier_services' => $metier_services,
            'metier_formations' => $metier_formations,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*================= Fin consulter_article ===========================================*/


    /*============consulter service ===================*/
    public function consulter_serviceAction($idservice)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Accueil'));

        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));


        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $service = $em->getRepository('ContenuBundle:Service')->find($idservice);
        $services = $em->getRepository('ContenuBundle:Service')->findAll();
        
        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        if($service != null)
        {
            return $this->render('DomaineBundle:business_theme:consulter_service.html.twig',array(
            'service_courant' => $service,
            'mentions_legales' => $page_mention_legale,
            'menus' => $menus,
            'services' => $services,
            'page' => $page_index,
            'articles' => $articles,
            'publications' => $publications,
            'page_formation' => $page_formation,
            'metier_consulting' => $metier_consulting,
            'metier_services' => $metier_services,
            'metier_formations' => $metier_formations,
            )); 
        }
        
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*===========================Fin consulter service ========================================*/


    /*===================== Voir nos partenaires ====================================*/
    public function consulter_partenairesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Accueil'));
        
        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $services = $em->getRepository('ContenuBundle:Service')->findAll();

        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();

        $partenaires = $em->getRepository('ContenuBundle:Contenu')->findAll();

        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));
        
        if($partenaires != null)
        {
            return $this->render('DomaineBundle:business_theme:consulter_partenaires.html.twig', array(
                'page' => $page_index,
                'mentions_legales' => $page_mention_legale,
                'menus' => $menus,
                'services'=> $services,
                'articles' => $articles,
                'publications' => $publications,
                'page_formation' => $page_formation,
                'partenaires' => $partenaires,
                'metier_consulting' => $metier_consulting,
                'metier_services' => $metier_services,
                'metier_formations' => $metier_formations,
                ));
        }
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*==================Fin Voir nos partenaires ====================================*/

    /*===================== Voir notre equipe ====================================*/
    public function consulter_equipeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('DomaineBundle:Menu')->findAll();

        $page_index = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Accueil'));
        
        $page_mention_legale = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Mentions légales',
            'etat' => 1));

        $page_formation = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'SEMINAIRES'));

        $services = $em->getRepository('ContenuBundle:Service')->findAll();

        $equipe = $em->getRepository('ContenuBundle:Equipe')->findAll();

        $articles = $em->getRepository('ArticleBundle:Article')->getArticlesPublies();

        $publications = $em->getRepository('ArticleBundle:Article')->getPublicationsPublies();
        
        $metier_consulting = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Consulting'));
        $metier_services = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Services'));
        $metier_formations = $em->getRepository('PageBundle:Page')->findOneBy(array(
            'nom' => 'Formations'));

        if($equipe != null)
        {
            return $this->render('DomaineBundle:business_theme:consulter_equipe.html.twig', array(
                'page' => $page_index,
                'mentions_legales' => $page_mention_legale,
                'menus' => $menus,
                'services'=> $services,
                'articles' => $articles,
                'page_formation' => $page_formation,
                'equipe' => $equipe,
                'metier_consulting' => $metier_consulting,
                'metier_services' => $metier_services,
                'metier_formations' => $metier_formations,
                ));
        }
        return $this->redirect($this->generateUrl('domaine_homepage'));
    }
    /*==================Fin Voir notre equipe ====================================*/

    /*============= Formulaire de contact =============================================*/
    public function formulaire_de_contactAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        $request = $this->get('request');

        if($request->getMethod()== "POST")
        {       
                $nomPrenom = $_POST['nom'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $messageDemande = $_POST['message'];



                $sujet = 'Demande utilisateur';
                $destinataire = 'nfansou.bangoura@gmail.com';

                $message = 
                    "<html>

                        <strong>Demande d'informations </strong>  

                        <p><strong> Nom & prenom :</strong> $nomPrenom </p>
                        <p><strong>Message :</strong> $messageDemande</p>
                        <p><strong>Cordonnées de contact :</strong> Tel : $telephone<br>Email : $email </p>

                    </html>"
                    ;

                $headers = "From: \"<$email>\n";
                //$headers .= 'Bcc: Moi <nfansou.bangoura@gmail.com>'."\r\n";
                $headers .= "Reply-To: $email\n";
                $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

                ini_set("sendmail_from","nfansou.bangoura@gmail.com");
                if(mail($destinataire, $sujet, $message, $headers))
                {
                    return $this->redirect($this->generateUrl('domaine_voir_page', array(
                        'idpage' => $page->getId(),
                        'message_confirmation' => 'Votre demande à bien été envoyé.'
                        )));
                   
                }
                else
                {
                    return new Response('Echec envoi');
                }

            
          
        }

        else 
        {
            return new Response('Erreur envoi');
        }
    }
    /*============= Fin Formulaire de contact =========================================*/
    
    /*============= Formulaire depot de cv =============================================*/
    public function depot_de_cvAction($idpage)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PageBundle:Page')->find($idpage);

        $request = $this->get('request');

        if($request->getMethod()== "POST")
        {       
                $nomPrenom = $_POST['candidat'];
                $fichier_cv = $_POST['fichier_cv'];
                $lettre_motivation = $_POST['lettre_motivation'];



                $sujet = 'Candidature';
                $destinataire = 'nfansou.bangoura@gmail.com';

                $message = 
                    "<html>

                        <strong>Demande de candidature </strong>  

                        <p><strong> Nom & prenom :</strong> $nomPrenom </p>
                        <p><strong>Message :</strong> $lettre_motivation</p>
                        <p><strong>CV Joint :</strong> Tel : $fichier_cv </p>

                    </html>"
                    ;

                $headers = "From: \"<$email>\n";
                //$headers .= 'Bcc: Moi <nfansou.bangoura@gmail.com>'."\r\n";
                $headers .= "Reply-To: $email\n";
                $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

                ini_set("sendmail_from","nfansou.bangoura@gmail.com");
                if(mail($destinataire, $sujet, $message, $headers))
                {
                    return $this->redirect($this->generateUrl('domaine_voir_page', array(
                        'idpage' => $page->getId(),
                        )));
                   
                }
                else
                {
                    return new Response('Echec envoi');
                }

            
          
        }

        else 
        {
            return new Response('Erreur envoi');
        }
    }
    /*============= Fin Formulaire de dépôt CV ======================================*/
    


}
