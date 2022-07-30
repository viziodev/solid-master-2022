<?php 

namespace App\Models;
//Responsabilite : Structuration des donnees d'un User => Model
class Gestionnaire extends User{
    public $matricule;
    public $niveau;

    public function __construct()
    {
        $this->role="Gestionnaire";
    }

    public function affiche():string{
        return parent::affiche()." <br>Matricule : $this->matricule <br> Niveau de Recrutement : $this->niveau";
    }
}