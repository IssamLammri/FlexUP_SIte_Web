<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('emailConfirmed')
            ->add('mobile')
            ->add('firstName')
            ->add('lastName')
            ->add('userName')
            ->add('password')
            ->add('isPro')
            ->add('pidNumber')
            ->add('pidExpirationDate')
            ->add('pidEmissionEntity')
            ->add('sSN')
            ->add('idMainAddress')
            ->add('pidType')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
