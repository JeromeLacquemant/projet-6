<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\Videos;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class FigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //category_figure is a relation, so it's more complicated to manage than others fields.
        // EntityType allows to show objects which are in the database.
        $builder
            ->add('name')
            ->add('content')
            ->add('category_figure', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'title'
            ])
            ->add('images', CollectionType::class, [
                'entry_type' => ImageType::class,
                'entry_options' => [
                    'label' => false
                ],
                'allow_add' => true,
                'mapped' => false,
                'required' => false,
            ])
            ->add('videos', CollectionType::class, [
                'entry_type' => VideoType::class,
                'entry_options' => [
                    'label' => true
                ],
                'allow_add' => true,
                'mapped' => false,
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
