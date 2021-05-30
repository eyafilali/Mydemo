<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $User = new User();
            $User->setEmail('User '.$i.'@gmail.com');
           
            $User->setPassword('password'.$i);
            $manager->persist($User);

        $manager->flush();
    }
    
}}

