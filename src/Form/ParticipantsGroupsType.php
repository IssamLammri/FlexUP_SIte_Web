<?php

namespace App\Form;

use App\Entity\ParticipantsGroups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParticipantsGroupsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idParticipantGroup')
            ->add('investmentDate')
            ->add('amount')
            ->add('type')
            ->add('dateLeaves')
            ->add('idOriginGroup')
            ->add('idParticipantG')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ParticipantsGroups::class,
        ]);
    }
}
