<?php

namespace App\Form;

use App\Entity\PortSemainecarnet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SemaineCarnetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numsemaine')
            ->add('apprentissage')
            ->add('bilan')
            ->add('idcarnet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PortSemainecarnet::class,
        ]);
    }
}
