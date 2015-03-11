<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rabot\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        
        ->add('profil', 'choice', array(
                'choices' => array(
                    ' ' => ' ',
                    'ROLE_EMPLOYE'      => 'Employe',
                    'ROLE_ADMIN'   => 'Administrateur',
                    'ROLE_INACTIF' => 'DESACTIVER'
                    )
                ))
          ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'Rabot_userbundle_user_registration';
    }
}
