<?php

namespace App\Form;

use App\Entity\Pointage;
use App\Entity\Utilisateur;
use App\Entity\Chantier;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PointageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('duree', IntegerType::class, [
                'label' => 'Durée',
                'attr' => [
                    'min' => 0
                ]
            ])
            ->add('utilisateur', EntityType::class, [
                'label' => 'Utilisateur',
                'class' => Utilisateur::class,
                'choice_label' => function ($utilisateur) {
                    return ucfirst($utilisateur->getPrenom()) . ' ' . strtoupper($utilisateur->getNom());
                },
                'placeholder' => 'Choisir un utilisateur'
            ])
            ->add('chantier', EntityType::class, [
                'label' => 'Chantier',
                'class' => Chantier::class,
                'choice_label' => function ($chantier) {
                    return ucfirst($chantier->getNom());
                },
                'placeholder' => 'Choisir un chantier'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pointage::class,
        ]);
    }
}
