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

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
