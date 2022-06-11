<?php

namespace App\Form;

use App\Entity\NormDocument;
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

class NormDocumentType extends AbstractType
{
    public $log;

    function __construct(LoggerInterface $logger) {

        $this->log = $logger;

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_document', DateType::class, [
                'label' => 'label.date_document',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'label.date_document',
                    'title' => 'label.date_document',
                    'class' => 'form-control',
                    'name' => 'norm_document_date_document'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'label.name',
                'attr' => [
                    'placeholder' => 'label.name',
                    'title' => 'label.name',
                    'class' => 'form-control',
                    'name' => 'norm_document_name'
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
                    'name' => 'norm_document__status'
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
                'name' => 'norm_document_rendition'
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
                    'name' => 'norm_document_product'
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
            'data_class' => NormDocument::class,
        ]);
    }
}
