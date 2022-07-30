<?php 

namespace App\Models;
//Responsabilite : Structuration des donnees d'un User => Model
class User implements IFactory{
    public $login;
    public $password;
    public $role;
     
    public function __construct()
    {
        $this->role="User";
    }

    public function affiche():string{
        return "Role : $this->role <br> Login : $this->login";
    }

    public static  function  factory($data){
             $classe="App\\Models\\".$data['type'];
             $obj=new  $classe  ; 
        foreach ($data as $key => $value) {
                $obj->{$key}=$value;
        }
        return $obj;
            
    }
}