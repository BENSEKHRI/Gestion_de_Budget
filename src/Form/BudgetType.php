<?php

namespace App\Form;

use App\Entity\Budget;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BudgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('geographie', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Géographie', 
            ])
            ->add('canal', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Canal', 
            ])
            ->add('produit', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Produit', 
            ])
            ->add('ventes', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Ventes', 
            ])
            ->add('version', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Version', 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Budget::class,
        ]);
    }
}
