<?php 
namespace App\Dao;


interface IDaoBd{
    public static function openConnexion();
    public static function closeConnexion();
    
}