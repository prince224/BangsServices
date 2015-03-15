<?php
/*
    @Author Prince Bangoura
    @product CMS build with PHP >=5.3.3 SYMFONY 2.5 - Bootstrap 3.3.2 - ckeditor 4.4.7
    @Function Engineer
    @Young entrepreneur
    @Date==>2015
    @V 0.1.1
*/
namespace Cms\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
	public function getParent()
   	{
    	return 'FOSUserBundle';
  	}
}
