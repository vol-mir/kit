<?php

namespace App\Form;

use App\Entity\ProductionPlan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductionPlanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_erp', TextType::class, [
                'label' => 'label.id_erp',
                'attr' => [
                    'placeholder' => 'label.id_erp',
                    'title' => 'label.id_erp',
                    'class' => 'form-control',
                    'name' => 'production_plan_id_erp'
                ]
            ])
            ->add('date_erp', DateType::class, [
                'label' => 'label.date_erp',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'label.date_erp',
                    'title' => 'label.date_erp',
                    'class' => 'form-control',
                    'name' => 'production_plan_date_erp'
                ]
            ])
            ->add('date_begin_erp', DateType::class, [
                'label' => 'label.date_begin_erp',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'label.date_begin_erp',
                    'title' => 'label.date_begin_erp',
                    'class' => 'form-control',
                    'name' => 'production_plan_date_begin_erp'
                ]
            ])
            ->add('date_end_erp', DateType::class, [
                'label' => 'label.date_end_erp',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'label.date_end_erp',
                    'title' => 'label.date_end_erp',
                    'class' => 'form-control',
                    'name' => 'production_plan_date_end_erp'
                ]
            ])
            ->add('account_type', ChoiceType::class, [
                'choices' => array_flip(ProductionPlan::ACCOUNT_TYPES),
                'label' => 'label.account_type',
                'empty_data' => '1',
                'attr' => [
                    'title' => 'label.account_type',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'production_plan_account_type'
                ]
            ]);

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
            'data_class' => ProductionPlan::class,
        ]);
    }
}
