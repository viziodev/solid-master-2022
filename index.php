<?php

use App\Models\User;
use App\UserService;
use App\Dao\UserDaoBD;

use App\Dao\UserDaoJson;
use App\Dao\UserDaoBDObject;

require_once "./vendor/autoload.php";

require_once('./config/kernel.php');
$service =new UserService($json);
$user=new User();
$user->login="visiteur";
$user->password="visiteur";
$service->login($user);
//var_dump(UserDaoBD::findUserBD($user));

