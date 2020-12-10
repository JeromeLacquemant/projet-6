<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use App\Entity\Comment;
use App\Entity\Category;
use App\DataFixtures\UserFixtures;
use App\DataFixtures\CommentFixtures;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FigureFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            CategoryFixtures::class
        );
    }

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        
        $figure = new Figure();
        $content = "Cette figure – qui consiste à attraper sa planche 
        d'une main et le tourner perpendiculairement au sol – est un classique 
        old school. Il n'empêche qu'il est indémodable, avec de vrais 
        ambassadeurs comme Jamie Lynn ou la star Terje Haakonsen. En 2007, 
        ce dernier a même battu le record du monde du air le plus haut en s'élevant à 
        9,8 mètres au-dessus du kick (sommet d'un mur d'une rampe ou autre structure de saut).";

        $figure     ->setName("turnaround")
                    ->setContent($content)
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setModifiedAt($faker->dateTimeBetween('-6 months'))
                    ->setFigureUser($this->getReference("daniel"))
                    ->setCategoryFigure($this->getReference("categorie-1"))
                    ->setSlug("turnaround");
        $manager->persist($figure); 
        $this->addReference("turnaround", $figure);

        $figure = new Figure();
        $figure     ->setName("double-flip")
                    ->setContent($content)
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setModifiedAt($faker->dateTimeBetween('-6 months'))
                    ->setFigureUser($this->getReference("thierry"))
                    ->setCategoryFigure($this->getReference("categorie-2"))
                    ->setSlug("double-flip");
        $manager->persist($figure); 
        $this->addReference("double-flip", $figure);

        $figure = new Figure();
        $figure     ->setName("gridrailer")
                    ->setContent($content)
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setModifiedAt($faker->dateTimeBetween('-6 months'))
                    ->setFigureUser($this->getReference("franck"))
                    ->setCategoryFigure($this->getReference("categorie-1"))
                    ->setSlug("gridrailer");
        $manager->persist($figure); 
        $this->addReference("grid", $figure);


        $manager->flush();
    }
}