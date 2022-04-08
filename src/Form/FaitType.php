<?php

namespace App\Form;

use App\Entity\Fait;
use App\Entity\Geographie;
use App\Repository\GeographieRepository;
use App\Entity\Canal;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('produit', EntityType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Produit', 
                'class' => Produit::class,
                'choice_label' => 'nomProduit',
                'query_builder' =>  function(ProduitRepository $nomProduit) {
                    return $nomProduit->createQueryBuilder('p')->orderBy('p.nomProduit', 'ASC');
                },
                'required' => false
            ])  
            ->add('actual')
            ->add('budget')
            ->add('date', DateType::class, [
                'widget'      => 'single_text',
                'input'       => 'datetime',
                'years'       => range(date('Y'), date('Y') - 30, -1)            ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fait::class,
        ]);
    }
}
