<?php 

namespace App;
//Responsabilite : 
//Gerer la Session
class Session{
    public static function  start(){
       if(session_status()==PHP_SESSION_NONE){
           session_start();
       }
    }

    public static function  detroy(){
       if(session_status()==PHP_SESSION_ACTIVE){
         session_destroy();
       }

    }

    public static function  get($key){
        self::start();
       return  $_SESSION[$key];
    }

    public static function  set($valeur,$key){
        self::start();
          $_SESSION[$key]=$valeur;
    }
}