<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

use FOS\UserBundle\Controller\RegistrationController as BaseController;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\UserEvent;

use Cms\UserBundle\Entity\User;
use Cms\UserBundle\Form\UserType;


class AdminController extends Controller
{
    public function homepage_utilisateursAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('UserBundle:User')->findAll();

        return $this->render('UserBundle:Admin:homepage_utilisateurs.html.twig', array(
            'utilisateurs' => $utilisateurs,
            ));
    }
    /*========Fin homepage_utilisateur =============================== */

    /*================= modifier utilisateur ==========================*/
    public function modifier_utilisateurAction(Request $request, $idutilisateur)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');
     
        $user = $em->getRepository('UserBundle:User')->find($idutilisateur);
        $user->setEnabled(true);
        

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, new UserEvent($user, $request));
     
        $form = $formFactory->createForm();
        $form->setData($user);

     
        if ('POST' === $request->getMethod()) {

            $form->bind($request);

     
            if ($form->isValid()) {

                $userprofil = $user->getProfil();

                $role = array($userprofil);

                $user->setRoles($role);

                $userManager->updateUser($user);
            
                return $this->redirect($this->generateUrl('user_homepage'));
                //return $response;
            }
        }
     
        return $this->render('UserBundle:Admin:modifier_utilisateur.html.twig', array(
        'form' => $form->createView(),
        'utilisateur' => $user,
        ));
    }
    /*==============Fin modifier utilisateur ==========================*/


    /*=================Supprimer utilisateur ==========================*/
    public function supprimer_utilisateurAction($idutilisateur)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('UserBundle:User')->find($idutilisateur);
        
        if($utilisateur != null)
        {
            $em->remove($utilisateur);
            $em->flush();

            return $this->redirect($this->generateUrl('user_homepage'));
        }
        return $this->redirect($this->generateUrl('user_homepage'));
    }
    /*=================Fin Supprimer utilisateur ==========================*/

}
