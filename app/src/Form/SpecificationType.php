<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Specification;
use App\Entity\Rendition;
use Doctrine\ORM\EntityRepository;
use App\Repository\ProductRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Psr\Log\LoggerInterface;

class SpecificationType extends AbstractType
{
    public $log;

    function __construct(LoggerInterface $logger) {

        $this->log = $logger;

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_specification', DateType::class, [
                'label' => 'label.date_specification',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'label.date_specification',
                    'title' => 'label.date_specification',
                    'class' => 'form-control',
                    'name' => 'specification_date_specification'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'label.name',
                'attr' => [
                    'placeholder' => 'label.name',
                    'title' => 'label.name',
                    'class' => 'form-control',
                    'name' => 'specification_name'
                ]
            ])
           ->add('status', ChoiceType::class, [
                'choices' => array_flip(Specification::STATUSES),
                'label' => 'label.status',
                'empty_data' => '1',
                'attr' => [
                    'title' => 'label.status',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'section_specification_status'
                ]
            ]);


        $builder->add('rendition', EntityType::class, [
            'class' => Rendition::class,
            'label' => 'label.rendition',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.name', 'ASC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.rendition',
                'title' => 'label.rendition',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'product_rendition'
            ]
        ]);

        $formModifier = function ($form, $product) {
            $form->add('product', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.product',
                'query_builder' => function(ProductRepository $repo) use ($product) {
                    return $repo->findForSelectProduct($product);
                },
                'choice_label' => 'full_name',
                'choice_value' => 'id',
                'attr' => [
                    'placeholder' => 'label.product',
                    'title' => 'label.product',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'specification_product'
                ]
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $form = $event->getForm();

                $formModifier($form, $data->getProduct());
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $modifier = $data['product'];

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
            'data_class' => Specification::class,
        ]);
    }
}

/*
->add('product', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.product',
                'query_builder' => static function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->andWhere("p.intype = :intype")
                        ->setParameter('intype', Product::INTYPE_PRODUCT)
                        ->orderBy('p.name', 'ASC')
                        ->addOrderBy('p.designation', 'ASC');
                },
                'choice_label' => 'full_name',
                'choice_value' => 'id',
                'attr' => [
                    'placeholder' => 'label.product',
                    'title' => 'label.product',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'specification_product'
                ]
            ])
 ->add('product', ChoiceType::class, [
                'label' => 'label.product',
                'choices' => [
        'In Stock' => true,
        'Out of Stock' => false,
    ],
                 'attr' => [
                    'placeholder' => 'label.product',
                    'title' => 'label.product',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'specification_product'
                ]
            ])
 */

