<?php

namespace Cms\ContenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContenuBundle:Default:index.html.twig', array('name' => $name));
    }
}
