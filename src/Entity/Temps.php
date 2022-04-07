<?php

namespace App\Entity;

use App\Repository\TempsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TempsRepository::class)]
class Temps
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\OneToMany(mappedBy: 'date', targetEntity: Fait::class)]
    private $faits;

    public function __construct()
    {
        $this->faits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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
            $fait->setDate($this);
        }

        return $this;
    }

    public function removeFait(Fait $fait): self
    {
        if ($this->faits->removeElement($fait)) {
            // set the owning side to null (unless already changed)
            if ($fait->getDate() === $this) {
                $fait->setDate(null);
            }
        }

        return $this;
    }
}
