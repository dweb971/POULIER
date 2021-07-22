<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\RendezVous;

class RendezvousFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $idpatient = new Patient;
        $idpatient->getId(3);
x
        $date = new DateTimes('now');

        $rdv = new RendezVous();
        $rdv->setIdPatient($idpatient); 
        $rdv->setVisite('Divers');
        $rdv->setPatient(0);
        $rdv->setDateRdv('22 Septembre 2021');
        $rdv->serHeureRdv('10:00');
        $rdv->setDateAdd($date);
        $rdv->setDateUpdate($date);
        $manager->persist($rdv);

        $manager->flush();
    }
}
