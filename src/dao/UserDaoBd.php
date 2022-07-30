<?php 

namespace App\Dao;

use App\User;


//Responsabilite : 
 //Acces des donnes d'utilisateur dans la BD
class UserDaoBD implements IDao{
    //Design Pattern Singleton
    private static  $pdo=null;//
    public static function findUserLoginAndPassword(User $user){
    //1.Ouvrir la Connection BD
      self::openConnexion();
    //2.Ecrire la requete
       $sql="select * from user where login=? and password=?";
      //3.Executer la requete
        $stmt=self::$pdo->prepare( $sql);
        $stmt->execute([$user->login,$user->password]);
      //5.Renvoyez les donnees 
       if($stmt->rowCount()==0) {
        return null;
       }else{
                $value=$stmt->fetch(\PDO::FETCH_ASSOC);
                $user=new User();
                $user->login=$value['login'];
                $user->password=$value['password'];
            return $user;
       }
    //4.Fermer la connexion 

       self::closeConnexion();
    
    }

    public static function openConnexion(){
        //Pas de Connexion
       if(self::$pdo==null){
          $dsn = 'mysql:dbname=solid_master_2022;host=127.0.0.1:8889';
          $user = 'root';
          $password = 'root';
          try {
            self::$pdo = new \PDO($dsn, $user, $password);
          } catch (\Exception $th) {
                die($th->getMessage());
          }
          
       }
    }

    public static function closeConnexion(){
        if(self::$pdo!=null){
              self::$pdo=null;
        } 
    }



    public static  function loadData($key=null){

    }


}