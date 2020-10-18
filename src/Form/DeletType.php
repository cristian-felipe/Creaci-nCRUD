<?php

namespace App\Form;

use App\Entity\Borrar;
use App\Entity\Borrar2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('del',SubmitType::class,['label'=>'del'])
            ->add('back',SubmitType::class,['label'=>'back'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Borrar::class,
            // Configure your form options here
        ]);
    }
}
