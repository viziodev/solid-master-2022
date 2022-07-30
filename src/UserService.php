<?php 

namespace App;

use App\Models\User;
use App\Dao\UserDaoBD;
use App\Dao\UserDaoJson;
//Responsabilite : 
 //Definition  des fonctionnalites du Users
class UserService{
 
    public $class;
    public function __construct(string $class=UserDaoBD::class )
    {
        $this->class=$class;
    }
    public function login(User $user){
        //1.Validation des Donnees
        Validator::isEmpty($user->login,"login");
        Validator::isEmpty($user->password,"password");
        if(Validator::valided()){
              //2.Rechercher si User existe dans le Json
             /* if($this->DB_TYPE=="json"){
                echo "Json...<br>";
                $class=UserDaoJson::class;
              }else{
                echo "Base de Donne...<br>";
                  $user=UserDaoBD::class;
              }*/
              $user=$this->class::findUserLoginAndPassword($user);
             //3. Si User existe
               if(!is_null($user)) {
                    //a.Stoker User dans la Session
                   // Session::set('user_connect',$user);
                    //b.Affcher les Infos du User connecte
                    Vue::affiche($user->affiche());
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