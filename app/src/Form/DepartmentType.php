<?php

namespace App\Form;

use App\Entity\Department;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class DepartmentType extends AbstractType
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
                    'name' => 'department_name'
                ]
            ])
        ;

        $builder->add('parent', EntityType::class, [
            'class' => Department::class,
            'label' => 'label.department_parent',
            'query_builder' => static function (EntityRepository $er) {
                return $er->createQueryBuilder('o')
                    ->orderBy('o.name', 'DESC');
            },
            'choice_label' => 'name',
            'choice_value' => 'id',
            'required' => false,
            'placeholder' => 'placeholder.not_specified',
            'empty_data' => null,
            'attr' => [
                'placeholder' => 'label.department_parent',
                'title' => 'label.department_parent',
                'class' => 'form-control select2',
                'style' => 'width: 100%;',
                'name' => 'department_parent'
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
            'data_class' => Department::class,
        ]);
    }
}
