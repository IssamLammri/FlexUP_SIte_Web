<?php

namespace App\Form;

use App\Entity\TypeIdentifyDocument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeIdentifyDocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameFrancais')
            ->add('nameEnglish')
            ->add('nameItaly')
            ->add('nameArabic')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TypeIdentifyDocument::class,
        ]);
    }
}
