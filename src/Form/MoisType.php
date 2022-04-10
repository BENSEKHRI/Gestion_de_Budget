<?php

namespace App\Form;

use App\Entity\Mois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class MoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'widget'      => 'single_text',
                'input'       => 'datetime',
                'years'       => range(date('Y'), date('Y') - 30, -1),            
                'required' => true
                ])

            ->add('date1', DateType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'widget'      => 'single_text',
                'input'       => 'datetime',
                'years'       => range(date('Y'), date('Y') - 30, -1),            
                'required' => false
                ])

            ->add('date2', DateType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'widget'      => 'single_text',
                'input'       => 'datetime',
                'years'       => range(date('Y'), date('Y') - 30, -1),            
                'required' => false
                ])  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mois::class,
        ]);
    }
}
