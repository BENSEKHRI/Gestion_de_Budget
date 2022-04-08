<?php

namespace App\Form;

use App\Entity\FaitSearch;
use App\Entity\Geographie;
use App\Repository\GeographieRepository;
use App\Entity\Canal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class FaitSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('geographie', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Géographie', 
                'placeholder' => 'Choisissez un pays',
                'class' => Geographie::class,
                'choice_label' => 'pays',
                'query_builder' =>  function(GeographieRepository $pays) {
                                        return $pays->createQueryBuilder('g')->orderBy('g.pays', 'ASC');
                },
                'required' => false
                ])   

            ->add('canal', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Canal', 
                'placeholder' => 'Choisissez un canal',
                'class' => Canal::class,
                'choice_label' => 'typeCanal',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FaitSearch::class,
            'method' => 'get',
            'csrf_protection' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
