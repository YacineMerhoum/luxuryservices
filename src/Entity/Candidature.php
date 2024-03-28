<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $id_job = null;

    #[ORM\ManyToOne(inversedBy: 'candidatures')]
    private ?Candidats $id_candidat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdJob(): ?JobOffer
    {
        return $this->id_job;
    }

    public function setIdJob(?JobOffer $id_job): static
    {
        $this->id_job = $id_job;

        return $this;
    }

    public function getIdCandidat(): ?Candidats
    {
        return $this->id_candidat;
    }

    public function setIdCandidat(?Candidats $id_candidat): static
    {
        $this->id_candidat = $id_candidat;

        return $this;
    }
}
