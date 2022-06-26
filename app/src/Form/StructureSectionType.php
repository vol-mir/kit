<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Structure;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\ProductRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class StructureSectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $formModifier = function ($form, $product) {
            $form->add('product', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.product',
                'query_builder' => function(ProductRepository $repo) use ($product) {
                    return $repo->findForSelectProduct($product, Product::INTYPE_SPECIFICATION_SECTION);
                },
                'choice_label' => 'full_name',
                'choice_value' => 'id',
                'attr' => [
                    'placeholder' => 'label.product',
                    'title' => 'label.product',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'structure_product'
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
            'data_class' => Structure::class,
        ]);
    }
}
