<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\DataFixtures\FigureFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies ()
    {
        return array(
            FigureFixtures::class,
            UserFixtures::class
        );
    }

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        
        $now = new \DateTime();

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("turnaround"))
                    ->setContent("Trop stylé !")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("franck"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("turnaround"))
                    ->setContent("Chanmé dude !")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("daniel"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("double-flip"))
                    ->setContent("Ca balance grave !")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("thierry"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("double-flip"))
                    ->setContent("Comment tu fais ça sérieux ?")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("daniel"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("turnaround"))
                    ->setContent("Trop stylé !")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("franck"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment    ->setFigure($this->getReference("grid"))
                    ->setContent("Tout simplement excellent")
                    ->setCreatedAt($faker->dateTimeBetween($now))
                    ->setCommentUser($this->getReference("daniel"));
        $manager->persist($comment);

        $manager->flush();
    }
}
