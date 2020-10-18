<?php

namespace App\Form;

use App\Entity\ProductCategory;
use App\Entity\ProductsData;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('name')
            ->add('description')
            ->add('trademark')
            ->add('category')
            //->add('category',EntityType::class,['class'=>ProductCategory::class,'choice_label'=>'name'])
            ->add('price', MoneyType::class)
            ->add('Send',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProductsData::class,
        ]);
    }
}
