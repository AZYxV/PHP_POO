<?php

Class Humain {

    public int $taille = 175;
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;

        echo "Je suis né.e";
    }

    public function __destruct()
    {
        echo  "Je suis mort.e";
    }

    public function marcher(): void
    {
        echo "Je marche";
    }

    public function maTaille(): void
    {
        echo "Ma taille est de ".($this->taille + 1)." cm";
    }

}

$marcelline = new Humain('marcelline');
$constance = new Humain('Constance');

// Suppression de l'objet constance
unset($constance);