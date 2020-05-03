<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Figure;
use App\Entity\Comment;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class FigureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        // Creation of 5 faked categories
        for($i = 1; $i <= 5; $i++) {
            $category = new Category();
            $category   ->setTitle($faker->sentence())
                        ->setDescription($faker->paragraph());

            $manager->persist($category);

            // Creation between 4 and 6 figures for each category

            for($j = 1; $j <= mt_rand(4, 6); $j++) {
                $figure = new Figure();

                $content ='<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';              $content .= '</p>';

                $figure ->setName($faker->sentence())
                        ->setContent($content)
                        ->setCategory("Testtest")
                        ->setCategoryFigure($category)
                        ->setImage("http://placehold.it/350x150")
                        ->setVideo("http://placehold.it/350x150")
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'));
    
                $manager->persist($figure);

                // Providing between 4 and 10 comments for each figure
                for($k = 1; $k <= mt_rand(4, 10); $k++) {
                    $comment = new Comment();

                    $content .='<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';  

                    $now = new \DateTime();
                    $interval = $now->diff($figure->getCreatedAt());
                    $days = $interval->days;
                    $minimum = '-' . $days . ' days'; // -100 days

                    $comment    ->setAuthor($faker->name)
                                ->setContent($content)
                                ->setCreatedAt($faker->dateTimeBetween($minimum))
                                ->setFigure($figure);

                    $manager->persist($comment);
                }
            }
        }
        $manager->flush();
    }
}
