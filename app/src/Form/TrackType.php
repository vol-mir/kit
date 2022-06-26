<?php

namespace App\Form;

use App\Entity\Track;
use App\Entity\Department;
use App\Entity\TechnologicalOperation;
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


class TrackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('department', EntityType::class, [
            'class' => Department::class,
            'label' => 'label.department',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->where('o.number_department is NOT NULL')
                    ->orderBy('o.name', 'DESC');
            },
            'choice_label' => 'full_name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.department',
                'title' => 'label.department',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'track_department'
            ]
        ]);

        $builder->add('technological_operation', EntityType::class, [
            'class' => TechnologicalOperation::class,
            'label' => 'label.technological_operation',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.name', 'DESC');
            },
            'choice_label' => 'full_name',
            'choice_value' => 'id',
            'attr' => [
                'placeholder' => 'label.technological_operation',
                'title' => 'label.technological_operation',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'track_technological_operation'
            ]
        ]);

        $builder->add('time_cycle', NumberType::class, [
            'label' => 'label.time_cycle',
            'empty_data' => '0',
            'data' => (isset($options['data']) && $options['data']->getTimeCycle() !== null) ? $options['data']->getTimeCycle() : '0',
            'attr' => [
                'placeholder' => 'label.time_cycle',
                'title' => 'label.time_cycle',
                'class' => 'form-control',
                'name' => 'track_time_cycle',
                'min' => 0,
                'max' => 99999999,
                'step' => 0.000001,
            ]
        ]);

        $builder->add('time_piece', NumberType::class, [
            'label' => 'label.time_piece',
            'empty_data' => '0',
            'data' => (isset($options['data']) && $options['data']->getTimePiece() !== null) ? $options['data']->getTimePiece() : '0',
            'attr' => [
                'placeholder' => 'label.time_piece',
                'title' => 'label.time_piece',
                'class' => 'form-control',
                'name' => 'track_time_piece',
                'min' => 0,
                'max' => 99999999,
                'step' => 0.000001,
            ]
        ]);

        $builder->add('time_processing', NumberType::class, [
            'label' => 'label.time_processing',
            'empty_data' => '0',
            'data' => (isset($options['data']) && $options['data']->getTimeProcessing() !== null) ? $options['data']->getTimeProcessing() : '0',
            'attr' => [
                'placeholder' => 'label.time_processing',
                'title' => 'label.time_processing',
                'class' => 'form-control',
                'name' => 'track_time_processing',
                'min' => 0,
                'max' => 99999999,
                'step' => 0.000001,
            ]
        ]);

        $builder->add('number_operation', TextType::class, [
            'label' => 'label.number_operation',
            'attr' => [
                'placeholder' => 'label.number_operation',
                'title' => 'label.number_operation',
                'class' => 'form-control',
                'name' => 'track_number_operation'
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
            'data_class' => Track::class,
        ]);
    }
}
