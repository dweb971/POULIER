<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Patient;
use Datetime;

class PatientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $date = new Datetime('now');
        $patient = new Patient;
        $patient->setCivilite('2');
        $patient->setNom('POULIER');
        $patient->setPrenom('Mélanie');
        $patient->setTelephone('0690525162');
        $patient->setEmail('melaniepoulier@gmail.com');
        $patient->setDateAdd($date);
        $patient->setDateUpdate($date);
        $manager->persist($patient);


        #gestion des dates via entite
        $manager->flush();
    }
}
