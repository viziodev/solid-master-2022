<?php 

namespace App;
//Responsabilite : 
 //Validation des Donnees
class Validator{

    public static $errors=[];
    public static function valided():bool{
        return count(self::$errors)==0;
    }
    public static function isEmpty($data,$key,$sms="Champ Obligatoire"){
           if(empty($data)){
              self::$errors[$key]=$sms;
           }
     }

    public static function isEmail(){
        
    }

    public static function isPassword(){
        
    }
}