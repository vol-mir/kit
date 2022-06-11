<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductGroup;
use App\Entity\ProductType as EntityProductType;
use App\Entity\ProductKind;
use App\Entity\Calculation;
use App\Entity\ProductCategory;
use App\Entity\Unit;
use App\Entity\AnalyticGroup;
use App\Entity\FinanceGroup;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterialType extends AbstractType
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
                    'name' => 'material_name'
                ]
            ])

            ->add('profile_name', TextType::class, [
                'label' => 'label.profile_name',
                'attr' => [
                    'placeholder' => 'label.profile_name',
                    'title' => 'label.profile_name',
                    'class' => 'form-control',
                    'name' => 'material_profile_name'
                ]
            ])
            ->add('profile', TextType::class, [
                'label' => 'label.profile',
                'attr' => [
                    'placeholder' => 'label.profile',
                    'title' => 'label.profile',
                    'class' => 'form-control',
                    'name' => 'material_profile'
                ]
            ])
            ->add('profile_standard', TextType::class, [
                'label' => 'label.profile_standard',
                'attr' => [
                    'placeholder' => 'label.profile_standard',
                    'title' => 'label.profile_standard',
                    'class' => 'form-control',
                    'name' => 'material_profile_standard'
                ]
            ])
            ->add('mark', TextType::class, [
                'label' => 'label.mark',
                'attr' => [
                    'placeholder' => 'label.mark',
                    'title' => 'label.mark',
                    'class' => 'form-control',
                    'name' => 'material_mark'
                ]
            ])
            ->add('mark_standard', TextType::class, [
                'label' => 'label.mark_standard',
                'attr' => [
                    'placeholder' => 'label.mark_standard',
                    'title' => 'label.mark_standard',
                    'class' => 'form-control',
                    'name' => 'material_mark_standard'
                ]
            ])
            ->add('material_kind', TextType::class, [
                'label' => 'label.material_kind',
                'attr' => [
                    'placeholder' => 'label.material_kind',
                    'title' => 'label.material_kind',
                    'class' => 'form-control',
                    'name' => 'material_material_kind'
                ]
            ])
        ;

        $builder->add('unit', EntityType::class, [
            'class' => Unit::class,
            'label' => 'label.unit',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.name', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.unit',
                'title' => 'label.unit',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_unit'
            ]
        ]);

        $builder->add('product_group', EntityType::class, [
            'class' => ProductGroup::class,
            'label' => 'label.product_group',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.product_group',
                'title' => 'label.product_group',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_product_group'
            ]
        ]);

        $builder->add('product_type', EntityType::class, [
            'class' => EntityProductType::class,
            'label' => 'label.product_type',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.product_type',
                'title' => 'label.product_type',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_product_type'
            ]
        ]);

        $builder->add('product_kind', EntityType::class, [
            'class' => ProductKind::class,
            'label' => 'label.product_kind',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.product_kind',
                'title' => 'label.product_kind',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_product_kind'
            ]
        ]);

        $builder->add('product_category', EntityType::class, [
            'class' => ProductCategory::class,
            'label' => 'label.product_category',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.product_category',
                'title' => 'label.product_category',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_product_category'
            ]
        ]);

        $builder->add('analytic_group', EntityType::class, [
            'class' => AnalyticGroup::class,
            'label' => 'label.analytic_group',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.analytic_group',
                'title' => 'label.analytic_group',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'product_analytic_group'
            ]
        ]);

        $builder->add('finance_group', EntityType::class, [
            'class' => FinanceGroup::class,
            'label' => 'label.finance_group',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.finance_group',
                'title' => 'label.finance_group',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'product_finance_group'
            ]
        ]);

        $builder->add('calculation', EntityType::class, [
            'class' => Calculation::class,
            'label' => 'label.calculation',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.id', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.calculation',
                'title' => 'label.calculation',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'material_calculation'
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
            'data_class' => Product::class,
        ]);
    }
}
