<?php

interface Mammifere
{
    public function pilosite(): void;
}

trait Bipede
{
    public function courir(): void
    {
        echo "Je cours ! \n";
    }
}

abstract Class Humain implements Mammifere
{

    public static int $population = 0;
    public int $taille = 175;

    public int $force = 1;
    public string $nom;
    private string $secret;

    use Bipede;

    public function __construct(string $nomDeFammille)
    {
        $this->nom = $nomDeFammille;

        self::$population++;
        echo "Je suis né.e\n";
    }

    public function __destruct()
    {
        self::$population--;
        echo  "Je suis mort.e\n";
    }

    public function marcher(): void
    {
        echo "Je marche\n";
    }

    public function maTaille(): void
    {
        echo "Ma taille est de ".($this->taille + 1)." cm\n";
    }

    public function maForce(): void
    {
        echo "Ma force est de ".($this->force)."\n";
    }

    public function pilosite(): void
    {
        echo "J'ai du poil \n";
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

Class Homme extends Humain
{
    public int $force = 2;

}

Class Femme extends Humain
{

    public function faireEnfant(): void
    {
        echo "Oui, je peux enfanter\n";
    }

    public function pilosite(): void
    {
        echo "J'ai moins de poil que l'homme\n";
    }

}

$marcelline = new Femme('Dupont');
$constance = new Femme('Fernand');
$adam = new Homme('Bruce');

echo "La population actuelle est de ".Humain::$population."\n";

$adam->marcher();
$adam->maForce();
$marcelline->maForce();

$marcelline->faireEnfant();
$constance->faireEnfant();

$adam->pilosite();
$marcelline->pilosite();

$marcelline->setSecret("Pssstt... Ceci est un secret\n");
echo $marcelline->getSecret();

$marcelline->courir();

// Suppression de l'objet constance
unset($constance);

echo "La population actuelle est de ".Humain::$population."\n";