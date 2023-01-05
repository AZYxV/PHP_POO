<?php

Class Humain {

    public int $taille = 175;
    public string $nom;
    private string $secret;

    public function __construct(string $nomDeFammille)
    {
        $this->nom = $nomDeFammille;

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

    public function setSecret(string $secret): void
    {
        $this->secret=$secret;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

}

$marcelline = new Humain('Dupont');
$constance = new Humain('Fernand');

$marcelline->setSecret("Pssstt... Ceci est un secret");
echo $marcelline->getSecret();

// Suppression de l'objet constance
unset($constance);