<?php

namespace App\Form;

use App\Entity\Actualizar;
use App\Entity\ProductCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Actualizacion1Type extends AbstractType
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
            //->add('category',EntityType::class,['class'=>ProductCategory::class,'choice_label'=>'name'])
            ->add('price')
            ->add('update',SubmitType::class,['label'=>'actualizar'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Actualizar::class,
        ]);
    }
}
