<?php

namespace App\Entity;

use App\Repository\CanalRepository;
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
}
