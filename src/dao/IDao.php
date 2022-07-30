<?php 
namespace App\Dao;

use App\Models\User;


interface IDao{
    public static function findUserLoginAndPassword(User $user);
}