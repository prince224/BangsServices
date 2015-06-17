<?php

namespace Cms\ContenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Cms\DomaineBundle\Form\PhotoType;

class EquipeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')

            ->add('prenom')

            ->add('fonction')

            ->add('description', 'textarea', array(
                            'label' => 'Contenu',
                            'attr'=> array('class' => 'ckeditor')))

            ->add('photo', new PhotoType(), array(
                            'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\ContenuBundle\Entity\Equipe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_contenubundle_equipe';
    }
}
