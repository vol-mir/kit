<?php

namespace App\Form;

use App\Entity\ProductionPlanItem;
use App\Entity\Product;
use App\Entity\Rendition;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use App\Repository\ProductRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductionPlanItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
                    'name' => 'production_plan_item_product'
                ]
            ]);
        };

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
                'name' => 'production_plan_item_rendition'
            ]
        ]);

        $builder->add('amount', NumberType::class, [
            'label' => 'label.amount',
            'empty_data' => '0',
            'data' => (isset($options['data']) && $options['data']->getAmount() !== null) ? $options['data']->getAmount() : '0',
            'attr' => [
                'placeholder' => 'label.amount',
                'title' => 'label.amount',
                'class' => 'form-control',
                'name' => 'production_plan_item_amount',
                'min' => 0,
                'max' => 99999999,
                'step' => 0.0001,
            ]
        ]);

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
            'data_class' => ProductionPlanItem::class,
        ]);
    }
}
