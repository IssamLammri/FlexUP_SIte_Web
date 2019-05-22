<?php

namespace App\Form;

use App\Entity\Zone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameZone')
            ->add('level')
            ->add('z0')
            ->add('z1')
            ->add('z2')
            ->add('z3')
            ->add('z4')
            ->add('z5')
            ->add('idParent')
            ->add('currency')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Zone::class,
        ]);
    }
}
