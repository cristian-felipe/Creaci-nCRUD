<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('name')
            ->add('IngresarProducto',SubmitType::class,['label'=>'Ingresar Producto'])
            ->add('IngresarCategoria',SubmitType::class,['label'=>'Ingresar Categoria'])
            ->add('BorrarProducto',SubmitType::class,['label'=>'Borrar Producto'])
            ->add('BorrarCategoria',SubmitType::class,['label'=>'Borrar Categoria'])
            ->add('ActualizarProducto',SubmitType::class,['label'=>'Actualizar Producto'])
            ->add('ActualizarCategoria',SubmitType::class,['label'=>'Actualizar Categoria'])
            ->add('vista',SubmitType::class,['label'=>'vista'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
