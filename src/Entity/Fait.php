<?php

namespace App\Entity;

use App\Repository\FaitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(targetEntity: Canal::class, inversedBy: 'faits')]
    private $canal;

    #[ORM\ManyToOne(targetEntity: Geographie::class, inversedBy: 'faits')]
    private $geographie;

    #[ORM\Column(type: 'float', nullable: true)]
    private $actual1;

    #[ORM\Column(type: 'float', nullable: true)]
    private $actual2;

    #[ORM\Column(type: 'float', nullable: true)]
    private $budget1;

    #[ORM\Column(type: 'float', nullable: true)]
    private $budget2;

    #[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: 'faits')]
    private $produit;

    #[ORM\Column(type: 'integer')]
    private $actualVol;

    #[ORM\Column(type: 'integer')]
    private $budgetVol;
    
    #[ORM\Column(type: 'integer', nullable: true)]
    private $actualVol1;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $budgetVol1;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $actualVol2;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $budgetVol2;


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

    public function getGeographie(): ?Geographie
    {
        return $this->geographie;
    }

    public function setGeographie(?Geographie $geographie): self
    {
        $this->geographie = $geographie;

        return $this;
    }

    public function getActual1(): ?float
    {
        return $this->actual1;
    }

    public function setActual1(?float $actual1): self
    {
        $this->actual1 = $actual1;

        return $this;
    }

    public function getActual2(): ?float
    {
        return $this->actual2;
    }

    public function setActual2(?float $actual2): self
    {
        $this->actual2 = $actual2;

        return $this;
    }

    public function getBudget1(): ?float
    {
        return $this->budget1;
    }

    public function setBudget1(?float $budget1): self
    {
        $this->budget1 = $budget1;

        return $this;
    }

    public function getBudget2(): ?float
    {
        return $this->budget2;
    }

    public function setBudget2(?float $budget2): self
    {
        $this->budget2 = $budget2;

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
    
    public function getActualVol(): ?int
    {
        return $this->actualVol;
    }

    public function setActualVol(?int $actualVol): self
    {
        $this->actualVol = $actualVol;

        return $this;
    }

    public function getBudgetVol(): ?int
    {
        return $this->budgetVol;
    }

    public function setBudgetVol(?int $budgetVol): self
    {
        $this->budgetVol = $budgetVol;

        return $this;
    }
    
    public function getActualVol1(): ?int
    {
        return $this->actualVol1;
    }

    public function setActualVol1(int $actualVol1): self
    {
        $this->actualVol1 = $actualVol1;

        return $this;
    }

    public function getBudgetVol1(): ?int
    {
        return $this->budgetVol1;
    }

    public function setBudgetVol1(int $budgetVol1): self
    {
        $this->budgetVol1 = $budgetVol1;

        return $this;
    }

    public function getActualVol2(): ?int
    {
        return $this->actualVol2;
    }

    public function setActualVol2(?int $actualVol2): self
    {
        $this->actualVol2 = $actualVol2;

        return $this;
    }

    public function getBudgetVol2(): ?int
    {
        return $this->budgetVol2;
    }

    public function setBudgetVol2(?int $budgetVol2): self
    {
        $this->budgetVol2 = $budgetVol2;

        return $this;
    }

}
