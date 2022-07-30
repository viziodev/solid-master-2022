<?php 
namespace App\Models;
//Responsabilite : Structuration des donnees d'un User => Model
class Visiteur extends User{
    public $nom;
    public $prenom;

    public function affiche():string{
        return parent::affiche()." <br>Nom : $this->nom <br> Prenom : $this->prenom";
    }
}