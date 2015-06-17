<?php

namespace Cms\ContenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContenuType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('nompartenaire')
            ->add('contenu')
            ->add('telephone')
            ->add('email_contact')
            ->add('lien')
            ->add('publier')
            ->add('photo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\ContenuBundle\Entity\Contenu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_contenubundle_contenu';
    }
}
