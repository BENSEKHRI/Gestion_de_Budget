<?php

namespace App\Entity;

use App\Repository\CanalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CanalRepository::class)]
class Canal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $typeCanal;

    #[ORM\OneToMany(mappedBy: 'canal', targetEntity: Fait::class)]
    private $faits;

    public function __construct()
    {
        $this->faits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCanal(): ?string
    {
        return $this->typeCanal;
    }

    public function setTypeCanal(string $typeCanal): self
    {
        $this->typeCanal = $typeCanal;

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
            $fait->setCanal($this);
        }

        return $this;
    }

    public function removeFait(Fait $fait): self
    {
        if ($this->faits->removeElement($fait)) {
            // set the owning side to null (unless already changed)
            if ($fait->getCanal() === $this) {
                $fait->setCanal(null);
            }
        }

        return $this;
    }
}
