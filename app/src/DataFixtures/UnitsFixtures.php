<?php

namespace App\DataFixtures;

use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UnitsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $unit = new Unit();
        $unit->setName('не используется');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('шт');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('кг');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('м.п.');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('л');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('м2');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('м3');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('мл');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('мм');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('см3');
        $manager->persist($unit);

        $unit = new Unit();
        $unit->setName('Лист А4');
        $manager->persist($unit);

        $manager->flush();
    }
}
