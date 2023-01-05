<?php

Class Humain {

    public int $taille = 175;
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
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