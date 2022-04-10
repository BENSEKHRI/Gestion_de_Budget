<?php

namespace App\Form;

use App\Entity\Fait;
use App\Entity\Geographie;
use App\Entity\Mois;
use App\Repository\GeographieRepository;
use App\Entity\Canal;
use App\Entity\Produit;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Repository\ProduitRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class FaitType extends AbstractType
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
                'required' => true
            ])   
            ->add('canal', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Canal', 
                'placeholder' => 'Choisissez un canal',
                'class' => Canal::class,
                'choice_label' => 'typeCanal',
                'required' => true
            ])
            ->add('produit', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Produit', 
                'multiple' => false,
                'placeholder' => 'Choisissez un produit',
                'class' => Produit::class,
                'choice_label' => 'nomProduit',
                'query_builder' =>  function(ProduitRepository $nomProduit) {
                    return $nomProduit->createQueryBuilder('p')->orderBy('p.nomProduit', 'ASC');
                },
                'required' => true
            ]) 
            
            ->add('actual', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('budget', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            
            ->add('actual1', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('budget1', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            
            ->add('actual2', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('budget2', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false

            ])

            ->add('actualVol', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('budgetVol', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false

            ])

            ->add('actualVol1', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('budgetVol1', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false

            ])

            ->add('actualVol2', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('budgetVol2', NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false

            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fait::class,
        ]);
    }
}
