<?php

namespace App\Form;

use App\Entity\Skateboard;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SkateboardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('marca', TextType::class)
            ->add('modello', TextType::class)
            ->add('taglia', TextType::class)
            ->add('colore', TextType::class)
            ->add('tipologia', TextType::class)
            ->add('immagini', TextType::class) // var LONG con 3 immagini.
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Skateboard::class,
        ]);
    }
}