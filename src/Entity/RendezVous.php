<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    private ?User $client = null;

    #[ORM\ManyToOne(inversedBy: 'rdvcoiffeur')]
    private ?User $coiffeur = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    private ?Prestation $prestation = null;

    #[ORM\Column]
    private ?\DateTime $dateHeure = null;

    #[ORM\Column]
    private ?bool $valide = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?user
    {
        return $this->client;
    }

    public function setClient(?user $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getCoiffeur(): ?user
    {
        return $this->coiffeur;
    }

    public function setCoiffeur(?user $coiffeur): static
    {
        $this->coiffeur = $coiffeur;

        return $this;
    }

    public function getPrestation(): ?prestation
    {
        return $this->prestation;
    }

    public function setPrestation(?prestation $prestation): static
    {
        $this->prestation = $prestation;

        return $this;
    }

    public function getDateHeure(): ?\DateTime
    {
        return $this->dateHeure;
    }

    public function setDateHeure(\DateTime $dateHeure): static
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    public function isValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }
}
