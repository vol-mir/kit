<?php

namespace App\Form;

use App\Entity\MaterialNorm;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use App\Repository\ProductRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class MaterialNormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $formModifier = function ($form, $material) {
            $form->add('material', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.product',
                'query_builder' => function(ProductRepository $repo) use ($material) {
                    return $repo->findForSelectProduct($material, Product::INTYPE_MATERIAL);
                },
                'choice_label' => 'full_name',
                'choice_value' => 'id',
                'attr' => [
                    'placeholder' => 'label.material',
                    'title' => 'label.material',
                    'class' => 'form-control select2',
                    'style' => 'width: 100%;',
                    'name' => 'material_norm_material'
                ]
            ]);
        };

        $builder->add('amount', NumberType::class, [
            'label' => 'label.amountMaterial',
            'empty_data' => '0',
            'data' => (isset($options['data']) && $options['data']->getAmount() !== null) ? $options['data']->getAmount() : '0',
            'attr' => [
                'placeholder' => 'label.amountMaterial',
                'title' => 'label.amountMaterial',
                'class' => 'form-control',
                'name' => 'structure_amount',
                'min' => 0,
                'max' => 99999999,
                'step' => 0.0001,
            ]
        ]);

        $builder->add('note', TextareaType::class, [
            'label' => 'label.note',
            'required' => false,
            'attr' => [
                'placeholder' => 'label.note',
                'title' => 'label.note',
                'class' => 'form-control',
                'name' => 'structure_note'
            ]
        ]);

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $form = $event->getForm();

                $formModifier($form, $data->getMaterial());
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $modifier = $data['material'];

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
            'data_class' => MaterialNorm::class,
        ]);
    }
}
