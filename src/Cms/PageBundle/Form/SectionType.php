<?php

namespace Cms\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SectionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('numero')
            ->add('categories', 'entity', array(
                'class' => 'ArticleBundle:Categorie',
                'label' => 'Sélectionez les catégories : ',
                'multiple' => true,
                'property' => 'nom',
                ))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\PageBundle\Entity\Section'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_pagebundle_section';
    }
}
