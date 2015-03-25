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
use Symfony\Component\HttpFoundation\Response;

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
}
