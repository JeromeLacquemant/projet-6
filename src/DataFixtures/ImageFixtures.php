<?php

namespace App\DataFixtures;

use App\Entity\Images;
use App\DataFixtures\FigureFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ImageFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies ()
    {
        return array(
            FigureFixtures::class
        );
    }

    public function load(ObjectManager $manager)
    {

        $image = new Images();
        $image   ->setName("5f12b82e82c43.jpeg")
                ->setFigures($this->getReference("turnaround"));
        $manager->persist($image);

        $image = new Images();
        $image   ->setName("5f12b82e82c43.jpeg")
                ->setFigures($this->getReference("double-flip"));
        $manager->persist($image);

        $image = new Images();
        $image   ->setName("5f12b82e82c43.jpeg")
                ->setFigures($this->getReference("double-flip"));
        $manager->persist($image);

        $image = new Images();
        $image   ->setName("5f12b82e82c43.jpeg")
                ->setFigures($this->getReference("grid"));
        $manager->persist($image);

        $image = new Images();
        $image   ->setName("5f12b82e82c43.jpeg")
                ->setFigures($this->getReference("grid"));
        $manager->persist($image);

        $manager->flush();
    }
}
