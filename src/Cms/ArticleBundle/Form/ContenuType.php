<?php

namespace Cms\ArticleBundle\Form;

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
            ->add('titre','text', array('label' => 'Titre *:'))
            
            ->add('contenu', 'textarea', array(
                'label' => 'Contenu',
                'attr'=> array('class' => 'ckeditor')))

            ->add('dateCreation')

            ->add('auteur')

            ->add('dateDebut')
            ->add('dateFin')
            ->add('description')
            ->add('prix')
            //->add('categorie')



        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\ArticleBundle\Entity\Contenu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_articlebundle_contenu';
    }
}
