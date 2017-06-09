<?php

namespace CourseFinderBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ReviewType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content')
                ->add('stars')
                ->add('verified')
                ->add('anonymous')
                ->add('school', EntityType::class, 
                        ['class'=>'CourseFinderBundle:School', 'choice_label'=>'name'])
                ->add('course', EntityType::class, 
                        ['class'=>'CourseFinderBundle:Course', 'choice_label'=>'name'])
                ->add('user', EntityType::class, 
                        ['class'=>'CourseFinderBundle:User', 'choice_label'=>'username']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CourseFinderBundle\Entity\Review'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coursefinderbundle_review';
    }


}
