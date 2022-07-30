<?php 
namespace App\Models;
//Responsabilite : Structuration des donnees d'un User => Model
class Client extends User{
    public $telephone;
    public $adresse;

    public function __construct()
    {
        $this->role="Client";
    }

    public function affiche():string{
        return parent::affiche()." <br>Telephone : $this->telephone <br> Adresse : $this->adresse";
    }
}