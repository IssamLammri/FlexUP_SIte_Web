<?php

namespace App\Form;

use App\Entity\Enquiry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameClient')
            ->add('nameService')
            ->add('nameZone')
            ->add('orderDate')
            ->add('delivery')
            ->add('urgency')
            ->add('experience')
            ->add('unit')
            ->add('currency')
            ->add('quantity')
            ->add('price')
            ->add('isGroup')
            ->add('nameGroup')
            ->add('idUser')
            ->add('idGroupPurchased')
            ->add('idGroupV')
            ->add('idBasket')
            ->add('idOffersPrice')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Enquiry::class,
        ]);
    }
}
