<?php

namespace App;

use DateTime;

/**
 * Classe Utilisateur Abstraite
 * Cette classe représente des utilisateurs de l'application
 * Il s'agit d'une classe abstraite avec laquelle nous n'allons jamais instancier d'objets
 */

abstract class Utilisateur {
    private ?string $nom;
    private ?string $email;
    private ?string $identifiant;
    private ?datetime $dateInscription;

    // Constructeur (méthode magique __construct)
    public function __construct(
        ?string $nom,
        ?string $email,
        ?string $identifiant,
        ?datetime $dateInscription
    ) {
        $this->nom = $nom;
        $this->email = $email;
        $this->identifiant = $identifiant;
        $this->dateInscription = $dateInscription;
    }
    
    // Getters
    public function getNom() {
        return $this->nom;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getIdentifiant() {
        return $this->identifiant;
    }
    public function getDateInscription() {
        return $this->dateInscription;
    }

    // Setters
    public function setNom(?string $nom) {
        $this->nom = $nom;
    }
    public function setEmail(?string $email) {
        $this->email = $email;
    }

    /**
     * @param string $identifiant
     * Ceci est une méthode qui permet de définir l'identifiant
     */
    public function setIdentifiant(?string $identifiant) {
        $this->identifiant = $identifiant;
    }


}