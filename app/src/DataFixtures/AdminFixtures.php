<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('3869');
        $user->setFirstName('Admin');
        $user->setLastName('Admin');
        $user->setMiddleName('Admin');
        $user->setDepartment(15);
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword($this->encoder->encodePassword($user, '3869'));
        $manager->persist($user);

        $manager->flush();
    }
}
