<?php 

namespace App;
//Responsabilite : 
 //Definition  des fonctionnalites du Users
class UserService{
    
    public function login(User $user){
        //1.Validation des Donnees
        Validator::isEmpty($user->login,"login");
        Validator::isEmpty($user->password,"password");
        if(Validator::valided()){
              //2.Rechercher si User existe dans le Json
              $user=UserDaoJson::findUserLoginAndPassword($user);
             //3. Si User existe
               if(!is_null($user)) {
                    //a.Stoker User dans la Session
                    Session::set('user_connect',$user);
                    //b.Affcher les Infos du User connecte
                    Vue::affiche("Login : $user->login");
               }else{
                     //4. Si User n'existe pas 
                  Vue::affiche("Login ou Mot de Passe Incorrect");
               }
        }else{
                 ///b.Affcher les Erreurs
             $erreurs=Validator::$errors;
             Vue::afficheErrors( $erreurs);
        }
           
    }

    public function register(User $user){
        if(empty($login)){
            echo "Erreur";
         }else{
            echo "Valide";
         }
    }

}