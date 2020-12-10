<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $category = new Category();
        $category   ->setTitle("Les flips")
                    ->setDescription($faker->paragraph());
        $manager->persist($category);
        $this->addReference("categorie-1", $category);

        $category = new Category();
        $category   ->setTitle("Les grids")
                    ->setDescription($faker->paragraph());
        $manager->persist($category);
        $this->addReference("categorie-2", $category);


        $manager->flush();
    }
}
