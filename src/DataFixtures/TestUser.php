<?php

namespace App\DataFixtures;

use App\Entity\FakeUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class TestUser extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');

        // on créé 10 personnes
        for ($i = 0; $i < 10; $i++) {
            $fakeUser = new FakeUser();
            $fakeUser->setNom($faker->name);
            $fakeUser->setPassword($faker->password);
            $fakeUser->setAdresse($faker->streetAddress);
            $fakeUser->setVille($faker->city);
            $fakeUser->setCodePostal($faker->postcode);
            $fakeUser->setDescription($faker->text);
            $fakeUser->setEmail($faker->email);
            $manager->persist($fakeUser);
        }

        $manager->flush();

        $manager->flush();
    }
}
