<?php

Class Humain {

    public int $taille = 175;
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

}

$marcelline = new Humain('marcelline');
$constance = new Humain('Constance');