<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordHasherInterface;

    public function __construct (UserPasswordHasherInterface $userPasswordHasherInterface) 
    {
        $this->userPasswordHasherInterface = $userPasswordHasherInterface;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        for ($i = 0; $i < 1; $i++) :
            $user = new User();

            $user->setEmail('test@test.fr');
            // $user->setEmail($faker->email());
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(
                $this->userPasswordHasherInterface->hashPassword(
                    $user, "motdepasse"
                    // $user,$faker->password()
                )
            );
            
            //$user->setPassword('motdedepasse');
            //$user->setPassword($faker->password());

            $manager->persist($user);
        endfor;

        $manager->flush();
    }
}
