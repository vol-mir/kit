<?php

namespace App\Form;

use App\Entity\TechnologicalOperation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TechnologicalOperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'label.name',
                'attr' => [
                    'placeholder' => 'label.name',
                    'title' => 'label.name',
                    'class' => 'form-control',
                    'name' => 'technological_operation_name'
                ]
            ])
            ->add('code_operation', TextType::class, [
                'label' => 'label.code_operation',
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'label.code_operation',
                    'title' => 'label.code_operation',
                    'class' => 'form-control',
                    'name' => 'technological_operation_code_operation'
                ]
            ])
            ->add('type_operation', TextType::class, [
                'label' => 'label.type_operation',
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'label.type_operation',
                    'title' => 'label.type_operation',
                    'class' => 'form-control',
                    'name' => 'technological_operation_type_operation'
                ]
            ])
            ->add('code_type_operation', TextType::class, [
                'label' => 'label.code_type_operation',
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'label.code_type_operation',
                    'title' => 'label.code_type_operation',
                    'class' => 'form-control',
                    'name' => 'technological_operation_code_type_operation'
                ]
            ])
            ->add('note', TextareaType::class, [
                'label' => 'label.note',
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'label.note',
                    'title' => 'label.note',
                    'class' => 'form-control',
                    'name' => 'technological_operation_note'
                ]
            ])
        ;

        $builder->add('save', SubmitType::class, [
            'label' => 'title.save',
            'attr' => [
                'class' => 'btn btn-primary',
            ]
        ]);

        $builder->add('saveAndCreateNew', SubmitType::class, [
            'label' => 'title.save_and_create_new',
            'attr' => [
                'class' => 'btn btn-primary',
            ]
        ]);

        $builder->add('saveAndStay', SubmitType::class, [
            'label' => 'title.save_and_stay',
            'attr' => [
                'class' => 'btn btn-primary',
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TechnologicalOperation::class,
        ]);
    }
}
