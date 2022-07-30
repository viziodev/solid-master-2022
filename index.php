<?php

use App\User;
use App\UserService;

require_once "./vendor/autoload.php";

$service =new UserService;
$user=new User();
$user->login="user";
$user->password="user";
$service->login($user);

