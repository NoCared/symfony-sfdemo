<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FormationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        for ($i = 0; $i < 5; $i++) :
            $formation = new Formation();

            $formation->setNom($faker->words(3, true));
            $formation->setDescription($faker->paragraphs(20, true));
            $formation->setLieux($faker->city());

            $manager->persist($formation);
        endfor;

        $manager->flush();
    }
}
