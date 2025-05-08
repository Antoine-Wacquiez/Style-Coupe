<?php

namespace App\Form;

use App\Entity\Prestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints as Assert;

class PrestationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la prestation',
                'attr' => ['placeholder' => 'Ex : Coupe homme'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est requis.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères.',
                    ]),
                ]
            ])

            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['rows' => 4, 'placeholder' => 'Détail de la prestation...'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est requise.']),
                ]
            ])

            ->add('genre', ChoiceType::class, [
                'label' => 'Genre concerné',
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme',
                    'Mixte' => 'mixte',
                ],
                'placeholder' => 'Sélectionner le genre',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir un genre.']),
                ]
            ])

            ->add('duree', IntegerType::class, [
                'label' => 'Durée (en minutes)',
                'attr' => ['placeholder' => 'Ex : 30'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La durée est obligatoire.']),
                    new Assert\Positive(['message' => 'La durée doit être un nombre positif.']),
                ]
            ])

            ->add('prix', MoneyType::class, [
                'label' => 'Prix (en €)',
                'currency' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                    new Assert\Positive(['message' => 'Le prix doit être positif.']),
                ]
            ])

            ->add('actif', CheckboxType::class, [
                'label' => 'Activer cette prestation',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prestation::class,
        ]);
    }
}
