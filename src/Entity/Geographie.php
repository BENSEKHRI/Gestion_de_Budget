<?php

namespace App\Entity;

use App\Repository\GeographieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeographieRepository::class)]
class Geographie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $pays;

    #[ORM\OneToMany(mappedBy: 'geographie', targetEntity: Fait::class)]
    private $faits;

    public function __construct()
    {
        $this->faits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

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
            $fait->setGeographie($this);
        }

        return $this;
    }

    public function removeFait(Fait $fait): self
    {
        if ($this->faits->removeElement($fait)) {
            // set the owning side to null (unless already changed)
            if ($fait->getGeographie() === $this) {
                $fait->setGeographie(null);
            }
        }

        return $this;
    }
}
