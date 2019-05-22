<?php

namespace App\Form;

use App\Entity\Groups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('points')
            ->add('star')
            ->add('groupName')
            ->add('isFlexible')
            ->add('isRegistered')
            ->add('registrationName')
            ->add('registrationNumber')
            ->add('registrationCountry')
            ->add('idManager')
            ->add('idMainAddress')
            ->add('idRegisteredAddress')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Groups::class,
        ]);
    }
}
