<?php

namespace Cms\ContenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Cms\DomaineBundle\Form\PhotoType;

class EvenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('titre','text', array('label' => 'Titre *:'))

            ->add('contenu', 'textarea', array(
                            'label' => 'Contenu',
                            'attr'=> array('class' => 'ckeditor')))

            ->add('dateEvenement', 'date', array('label' => 'Date Evénement : '))

            ->add('auteur', 'text', array(
                            'label' => 'Auteur :',))

            ->add('publier', 'checkbox', array(
                            'label' => 'Publier ? ',
                            'required' => false))

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
            'data_class' => 'Cms\ContenuBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_contenubundle_evenement';
    }
}
