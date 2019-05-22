<?php

namespace App\Form;

use App\Entity\Addresses;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isGroup')
            ->add('addressLabel')
            ->add('contactName')
            ->add('organisationName')
            ->add('departmentName')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('postCode')
            ->add('state')
            ->add('country')
            ->add('accessDetails')
            ->add('idGroup')
            ->add('idUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Addresses::class,
        ]);
    }
}
