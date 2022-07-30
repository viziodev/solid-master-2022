<?php 

namespace App\Dao;

use App\Models\User;
use App\Models\Client;
use App\Models\Gestionnaire;

//Responsabilite : 
 //Acces des donnes d'utilisateur dans le fichier Json
class UserDaoJson implements IDao,IDaoJson{
    
    public static function findUserLoginAndPassword($user){
        //Chercher le User dans le Fichier Json
          //3.Rechercher le user dans le Tableau
          $users=self::loadData('users');
          foreach ( $users as  $value) {
              if($value['login']==$user->login and $value['password']==$user->password){
                     return User::factory($value);
              }
          }

          return null;
    }

    public static  function loadData($key=null){

      
              //1.Ouvrir et charger les donnees Json 
           $json=file_get_contents("./db/db.json");
           //2.Convertir le json en tableau
            $data=json_decode($json,true);
            if(is_null($key)){
                return $data;
            }else{
               return $data[$key];
            }
    }

   
}