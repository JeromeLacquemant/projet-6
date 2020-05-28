<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //category_figure is a relation, so it's more complicated to manage than others fields.
        // EntityType allows to show objects which are in the database.
        $builder
            ->add('name')
            ->add('content')
            ->add('category')
            ->add('category_figure', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'title'
            ])
            ->add('image')
            ->add('video')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
