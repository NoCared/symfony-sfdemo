<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++) {
            $user = new User();

            $user->setEmail($faker->email());
            $user->setPassword($faker->password());
            $user->setRoles(['ROLE_USER']);

            $manager->persist($user);
        }
        $manager->flush();
    }
}
