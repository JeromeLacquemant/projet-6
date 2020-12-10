<?php

namespace App\DataFixtures;

use App\Entity\Videos;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class VideoFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies ()
    {
        return array(
            FigureFixtures::class
        );
    }

    public function load(ObjectManager $manager)
    {
        $video = new Videos();
        $video   ->setName('<iframe width="560" height="315" src="https://www.youtube.com/embed/ifXalt3MJtM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
                ->setFigures($this->getReference("turnaround"));
        $manager->persist($video);

        $video = new Videos();
        $video   ->setName('<iframe width="560" height="315" src="https://www.youtube.com/embed/ifXalt3MJtM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
                ->setFigures($this->getReference("double-flip"));
        $manager->persist($video);

        $video = new Videos();
        $video   ->setName('<iframe width="560" height="315" src="https://www.youtube.com/embed/ifXalt3MJtM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
                ->setFigures($this->getReference("grid"));
        $manager->persist($video);

        $manager->flush();
    }
}
