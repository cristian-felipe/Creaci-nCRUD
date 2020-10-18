<?php

namespace App\Form;

use App\Entity\Filtro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Filtro2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            //->add('parametro')
            ->add('filtrar',SubmitType::class,['label'=>'filtrar'])
            ->add('back',SubmitType::class,['label'=>'back'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Filtro::class,
        ]);
    }
}
