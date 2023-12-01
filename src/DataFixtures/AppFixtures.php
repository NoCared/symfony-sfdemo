<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++) {
            $formation = new Formation();

            $formation->setNom($faker->words(3, true));
            $formation->setDescription($faker->paragraph(20, true));
            $formation->setLieux($faker->city());

            $manager->persist($formation);
        }
        $manager->flush();
    }
}
