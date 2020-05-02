<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class FigureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++)
        {
            $figure = new Figure();
            $figure ->setName("Nom de la figure n°$i")
                    ->setContent("<p>Description de la figure n°$i</p>")
                    ->setCategory("Catégorie freestyle")
                    ->setImage("http://placehold.it/350x150")
                    ->setVideo("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime());

            $manager->persist($figure);
        }

        $manager->flush();
    }
}
