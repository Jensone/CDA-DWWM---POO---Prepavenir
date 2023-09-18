<?php

namespace App;

require_once 'Utilisateur.php';

class Admin extends Utilisateur {
    private ?string $siret;

    /**
     * Get the value of siret
     */ 
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set the value of siret
     *
     * @return  self
     */ 
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }
}