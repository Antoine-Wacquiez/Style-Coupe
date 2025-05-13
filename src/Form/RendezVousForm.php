<?php

namespace App\Form;

use App\Entity\Prestation;
use App\Entity\RendezVous;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\UserRepository;

class RendezVousForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateHeure')
            ->add('valide')
            // Affichage du coiffeur (prénom et nom), avec filtre pour afficher seulement les coiffeurs
            ->add('coiffeur', EntityType::class, [
                'class' => User::class,
                'choice_label' => fn(User $user) => $user->getPrenom() . ' ' . $user->getNom(),
                'query_builder' => function (UserRepository $repo) {
                    return $repo->findCoiffeurs(); // Cela renvoie maintenant un QueryBuilder
                },
                'label' => 'Choisissez un coiffeur',
            ])
            

            // Affichage des prestations (nom de la prestation)
            ->add('prestation', EntityType::class, [
                'class' => Prestation::class,
                'choice_label' => 'nom', // Affiche le nom de la prestation
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
