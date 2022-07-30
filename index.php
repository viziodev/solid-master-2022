<?php

use App\Dao\UserDaoBD;
use App\Dao\UserDaoBDObject;
use App\Dao\UserDaoJson;
use App\User;
use App\UserService;

require_once "./vendor/autoload.php";

require_once('./config/kernel.php');
$service =new UserService($json);
$user=new User();
$user->login="user";
$user->password="user";
$service->login($user);
//var_dump(UserDaoBD::findUserBD($user));

