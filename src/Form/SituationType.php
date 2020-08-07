<?php

namespace App\Form;

use App\Entity\PortSituation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SituationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numetudiant')
            ->add('codelocalisation')
            ->add('codesource')
            ->add('codetype')
            ->add('codecadre')
            ->add('libcourt')
            ->add('descriptif')
            ->add('contexte')
            ->add('datedebut')
            ->add('datefin')
            ->add('environnement')
            ->add('moyen')
            ->add('avisperso')
            ->add('valide')
            ->add('datemodif')
            ->add('valideeprof')
            ->add('informprof')
            ->add('signaletud')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PortSituation::class,
        ]);
    }
}
