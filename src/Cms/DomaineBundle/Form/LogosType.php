<?php

namespace Cms\DomaineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LogosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                      
            ->add('nom', 'text', array('label' => 'Nom :'))
            ->add('lien', 'text', array('label' => 'Lien : '))
            ->add('file', 'file')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\DomaineBundle\Entity\Logos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_domainebundle_logos';
    }
}
