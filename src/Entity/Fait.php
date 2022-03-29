<?php

namespace App\Entity;

use App\Repository\FaitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FaitRepository::class)]
class Fait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $actual;

    #[ORM\Column(type: 'float')]
    private $budget;

    #[ORM\OneToOne(targetEntity: Canal::class, cascade: ['persist', 'remove'])]
    private $canal;

    #[ORM\OneToOne(targetEntity: Temps::class, cascade: ['persist', 'remove'])]
    private $date;

    #[ORM\OneToOne(targetEntity: Produit::class, cascade: ['persist', 'remove'])]
    private $produit;

    #[ORM\OneToOne(targetEntity: Geographie::class, cascade: ['persist', 'remove'])]
    private $geographie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActual(): ?float
    {
        return $this->actual;
    }

    public function setActual(float $actual): self
    {
        $this->actual = $actual;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getCanal(): ?Canal
    {
        return $this->canal;
    }

    public function setCanal(?Canal $canal): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getDate(): ?Temps
    {
        return $this->date;
    }

    public function setDate(?Temps $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getGeographie(): ?Geographie
    {
        return $this->geographie;
    }

    public function setGeographie(?Geographie $geographie): self
    {
        $this->geographie = $geographie;

        return $this;
    }
}
