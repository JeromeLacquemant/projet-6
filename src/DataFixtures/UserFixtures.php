<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $user = new User();
        $user   ->setEmail("daniel@gmail.com")
                ->setUsername("Daniel")
                ->setPassword($this->encoder->encodePassword($user, '12345'))
                ->setImage("photo-profil-user-Daniel.jpeg")
                ->setActivationToken(null)
                ->setResetToken(null);
        $manager->persist($user);
        $this->addReference('daniel', $user);

        $user = new User();
        $user   ->setEmail("test@gmail.com")
                ->setUsername("Thierry")
                ->setPassword($this->encoder->encodePassword($user, '34521'))
                ->setImage("avata.jpg")
                ->setActivationToken(null)
                ->setResetToken(null);
        $manager->persist($user);
        $this->addReference('thierry', $user);

        $user = new User();
        $user   ->setEmail("test@gmail.com")
                ->setUsername("Franck")
                ->setPassword($this->encoder->encodePassword($user, '54321'))
                ->setImage("photo-profil-user-Franck.jpeg")
                ->setActivationToken(null)
                ->setResetToken(null);
        $manager->persist($user);
        $this->addReference('franck', $user);

        $manager->flush();
    }
}
