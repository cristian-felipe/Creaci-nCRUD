<?php

namespace App\Form;

use App\Entity\Actualizar;
use App\Entity\ProductsData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActualizacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ids')
            ->add('code')
            ->add('name')
            ->add('description')
            ->add('trademark')
            ->add('category')
            ->add('price')
            ->add('update',SubmitType::class,['label'=>'actualizar'])
            ->add('back',SubmitType::class,['label'=>'back'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Actualizar::class
            //'data_class' => ProductsData::class,
        ]);
    }
}
