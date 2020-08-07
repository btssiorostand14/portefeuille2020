<?php

namespace App\Form;

use App\Entity\PortCarnetbord;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarnetbordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codesource')
            ->add('coordonneestut')
            ->add('tutmobile')
            ->add('tuttel')
            ->add('tutmail')
            ->add('lieu')
            ->add('idetud')
            ->add('nbsem')
            ->add('nomentreprise')
            ->add('adresseentreprise')
            ->add('codepostal')
            ->add('ville')
            ->add('servicestage')
            ->add('directeur')
            ->add('codenaf')
            ->add('siret')
            ->add('telentreprise')
            ->add('faxentreprise')
            ->add('melentreprise')
            ->add('anneestage')
            ->add('avis')
            ->add('datedebut')
            ->add('datefin')
            ->add('dureestage')
            ->add('horlun')
            ->add('hormar')
            ->add('hormer')
            ->add('horjeu')
            ->add('horven')
            ->add('horsam')
            ->add('sujet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PortCarnetbord::class,
        ]);
    }
}
