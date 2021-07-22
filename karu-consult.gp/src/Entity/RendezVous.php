<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPatient;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $visite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $patient;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $date_rdv;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $heure_rdv;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateAdd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateUpdate;

    public function __construct(){

        #gstion des dates
        $this->date_add = new \DateTime('America/Guadeloupe');
        $this->date_update = new\DateTime('America/Guadeloupe');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPatient(): ?Patient
    {
        return $this->idPatient;
    }

    public function setIdPatient(?Patient $idPatient): self
    {
        $this->idPatient = $idPatient;

        return $this;
    }

    public function getVisite(): ?string
    {
        return $this->visite;
    }

    public function setVisite(string $visite): self
    {
        $this->visite = $visite;

        return $this;
    }

    public function getPatient(): ?bool
    {
        return $this->patient;
    }

    public function setPatient(bool $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getDateRdv(): ?string
    {
        return $this->date_rdv;
    }

    public function setDateRdv(string $date_rdv): self
    {
        $this->date_rdv = $date_rdv;

        return $this;
    }

    public function getHeureRdv(): ?string
    {
        return $this->heure_rdv;
    }

    public function setHeureRdv(string $heure_rdv): self
    {
        $this->heure_rdv = $heure_rdv;

        return $this;
    }

    public function getDateAdd(): ?\DateTimeInterface
    {
        return $this->dateAdd;
    }

    public function setDateAdd(\DateTimeInterface $dateAdd): self
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate(\DateTimeInterface $dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }
}
