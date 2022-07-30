<?php 

namespace App;
//Responsabilite : 
 //Afficher les info
class Vue{

    public static function afficheErrors(array $errors){
        foreach ($errors as $value) {
            echo "$value </br>";
        }
    }

    public static function affiche(string $value){
        echo $value;
    }
}