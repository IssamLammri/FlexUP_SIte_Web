<?php

namespace App\Form;

use App\Entity\UserIdentify;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserIdentifyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pidNumber')
            ->add('dateOfIssue')
            ->add('dateOfExpiration')
            ->add('emissionEntity')
            ->add('satuts')
            ->add('idUser')
            ->add('idTypeentify')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserIdentify::class,
        ]);
    }
}
