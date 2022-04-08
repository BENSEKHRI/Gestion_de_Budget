<?php

namespace App\Entity;
use App\Entity\Canal;
use App\Entity\Geographie;



class FaitSearch {

    /**
     * @var Canal|null
     */
    private $canal;

    /**
     * @var Geographie|null 
     */
    private $geographie;

    public function getCanal(): ?Canal
    {
        return $this->canal;
    }

    public function setCanal(Canal $canal): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getGeographie(): ?Geographie
    {
        return $this->geographie;
    }

    public function setGeographie(Geographie $geographie): self
    {
        $this->geographie = $geographie;

        return $this;
    }
}