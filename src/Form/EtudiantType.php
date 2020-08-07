<?php

namespace App\Form;

use App\Entity\PortEtudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numgroupe',TextType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('mel',TextType::class)
            ->add('mdp',TextType::class)
            ->add('numexam',TextType::class)
            //->add('valide')
            ->add('bac',EntityType::class, array('class' => 'App\Entity\PortBac','choice_label' => 'libellebac' ))
            ->add('spebac')
            ->add('mobile')
            ->add('photo')
            ->add('adrperso')
            ->add('adrfamille')
            ->add('telperso')
            ->add('telfamille')
            ->add('postbac')
            ->add('etabbac')
            ->add('datenaiss', DateType::class, array('input' => 'datetime', 'widget' => 'single_text',  'required' => true, 'label' => 'Date de naissance', 'placeholder' => 'jj/mm/aaaa'))
            ->add('sexe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PortEtudiant::class,
        ]);
    }
}
