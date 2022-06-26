<?php

namespace App\Form;

use App\Entity\Organization;
use App\Entity\Structure;
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

class StructureProductType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('format', ChoiceType::class, [
            'choices' => array_flip(Structure::FORMATS),
            'label' => 'label.format',
            'empty_data' => '1',
            'attr' => [
                'title' => 'label.format',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'structure_format'
            ]
        ]);

        $builder->add('area', TextType::class, [
            'label' => 'label.area',
            'required' => false,
            'attr' => [
                'placeholder' => 'label.area',
                'title' => 'label.area',
                'class' => 'form-control',
                'name' => 'structure_area'
            ]
        ]);

        $builder->add('position', NumberType::class, [
            'label' => 'label.position',
            'empty_data' => $this->getPosition($options['data']->getSpecification()->getId()),
            'data' => (isset($options['data']) && $options['data']->getPosition() !== null) ? $options['data']->getPosition() : $this->getPosition($options['data']->getSpecification()->getId()),
            'attr' => [
                'placeholder' => 'label.position',
                'title' => 'label.position',
                'class' => 'form-control',
                'name' => 'structure_position',
                'min' => 0,
                'max' => 99999999,
                'step' => 1,
            ]
        ]);


        $formModifier = function ($form, $product) {
            $form->add('product', EntityType::class, [
                'class' => Product::class,
                'label' => 'label.product',
                'query_builder' => function(ProductRepository $repo) use ($product) {
                    return $repo->findForSelectProduct($product, Product::INTYPE_PRODUCT);
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

        $builder->add('comment', TextareaType::class, [
            'label' => 'label.comment',
            'required' => false,
            'attr' => [
                'placeholder' => 'label.comment',
                'title' => 'label.comment',
                'class' => 'form-control',
                'name' => 'structure_comment'
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

    public function getPosition(int $specificationId = null)
    {
        return $this->entityManager->getRepository(Structure::class)->getMaxPosition($specificationId) + 1;
    }
}
