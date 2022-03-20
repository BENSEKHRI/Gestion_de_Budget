<?php

namespace App\Entity;

use App\Repository\BudgetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BudgetRepository::class)]
class Budget
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $geographie;

    #[ORM\Column(type: 'string', length: 255)]
    private $canal;

    #[ORM\Column(type: 'string', length: 255)]
    private $produit;

    #[ORM\Column(type: 'string', length: 255)]
    private $ventes;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $version;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeographie(): ?string
    {
        return $this->geographie;
    }

    public function setGeographie(?string $geographie): self
    {
        $this->geographie = $geographie;

        return $this;
    }

    public function getCanal(): ?string
    {
        return $this->canal;
    }

    public function setCanal(string $produit): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getVentes(): ?string
    {
        return $this->ventes;
    }

    public function setVentes(string $ventes): self
    {
        $this->ventes = $ventes;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
