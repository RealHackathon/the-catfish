<?php

namespace CoursBundle\Form;

use CoursBundle\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LessonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('urlytb', TextType::class, [
                'label' => 'ID Youtube',
                'attr' => [
                    'placeholder' => 'K9M7iWWViA8'
                ]
            ])
//            ->add('questions', CollectionType::class, array(
//                'entry_type' => QuestionType::class,
//                'allow_add' => true,
//                'allow_delete' => true,
//                'prototype' => true,
//                'by_reference' => false,
//                'entry_options' => array(
//                    'attr' => array('class' => 'browser-default'),
//                )
//            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoursBundle\Entity\Lesson'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coursbundle_lesson';
    }


}
