<?php

namespace App\Form;

use App\Entity\Restaurant;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du restaurant',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('cuisinetype', TextType::class, [
                'label' => 'Type de Cuisine',
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('imageurl', FileType::class, [
                'label' => 'Image du Restaurant',
                'mapped' => false,  // Ce champ n'est pas mappé à l'entité, il ne sera pas enregistré directement
                'required' => false,  // Ce champ est optionnel
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}