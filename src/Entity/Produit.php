<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomProduit;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $typeProduit;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Fait::class)]
    private $faits;

    public function __construct()
    {
        $this->faits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    public function setTypeProduit(?string $typeProduit): self
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * @return Collection<int, Fait>
     */
    public function getFaits(): Collection
    {
        return $this->faits;
    }

    public function addFait(Fait $fait): self
    {
        if (!$this->faits->contains($fait)) {
            $this->faits[] = $fait;
            $fait->setProduit($this);
        }

        return $this;
    }

    public function removeFait(Fait $fait): self
    {
        if ($this->faits->removeElement($fait)) {
            // set the owning side to null (unless already changed)
            if ($fait->getProduit() === $this) {
                $fait->setProduit(null);
            }
        }

        return $this;
    }
}
