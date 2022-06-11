<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Calculation;
use App\Entity\ProductGroup;
use App\Entity\ProductType as EntityProductType;
use App\Entity\ProductKind;
use App\Entity\ProductCategory;
use App\Repository\ProductRepository;
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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ProductType extends AbstractType
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
                    'name' => 'product_name'
                ]
            ])
            ->add('id_erp', TextType::class, [
                'label' => 'label.id_erp',
                'attr' => [
                    'placeholder' => 'label.id_erp',
                    'title' => 'label.id_erp',
                    'class' => 'form-control',
                    'name' => 'product_id_erp'
                ]
            ])
            ->add('designation', TextType::class, [
                'label' => 'label.designation',
                'attr' => [
                    'placeholder' => 'label.designation',
                    'title' => 'label.designation',
                    'class' => 'form-control',
                    'name' => 'product_designation'
                ]
            ])
            ->add('weight', NumberType::class, [
                'label' => 'label.weight',
                    'empty_data' => '0',
                    'data' => (isset($options['data']) && $options['data']->getWeight() !== null) ? $options['data']->getWeight() : '0',
                    'attr' => [
                        'placeholder' => 'label.weight',
                        'title' => 'label.weight',
                        'class' => 'form-control',
                        'name' => 'product_weight',
                        'min' => 0,
                        'max' => 99999999,
                        'step' => 0.000001,
                ]
            ]);

        $builder->add('unit', EntityType::class, [
            'class' => Unit::class,
            'label' => 'label.unit',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.name', 'DESC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.unit',
                'title' => 'label.unit',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'product_unit'
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
                'name' => 'product_product_group'
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
                'name' => 'product_product_type'
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
                'name' => 'product_product_kind'
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
                'name' => 'product_product_category'
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
                'name' => 'product_calculation'
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

        $formModifier = function ($form, $materials) {
            $form->add('kd_materials', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.materials',
                'query_builder' => function(ProductRepository $repo) use ($materials) {
                    return $repo->findForMultiSelectProduct($materials, Product::INTYPE_MATERIAL);
                },
                'choice_label' => 'full_name',
                'multiple' => true,
                'required' => false,
                'attr' => [
                    'placeholder' => 'label.materials',
                    'title' => 'label.materials',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'product_kd_materials'
                ]
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $form = $event->getForm();

                $formModifier($form, $data->getKdMaterials());
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $modifier = array_key_exists('kd_materials', $data)?$data['kd_materials']:[];

                $formModifier($event->getForm(), $modifier);
            }
        );

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
