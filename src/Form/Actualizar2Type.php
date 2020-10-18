<?php

namespace App\Form;

use App\Entity\Actualizar2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Actualizar2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ids')
            ->add('code')
            ->add('name')
            ->add('description')
            ->add('active')
            ->add('update',SubmitType::class,['label'=>'update'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Actualizar2::class,
        ]);
    }
}
