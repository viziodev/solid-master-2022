<?php 
namespace App\Dao;
use App\User;

interface IDao{
    public static function findUserLoginAndPassword(User $user);
    public static function openConnexion();
    public static function closeConnexion();
    public static  function loadData($key=null);
}