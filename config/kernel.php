<?php 
//Charger les configs
$json=file_get_contents("./config/database.json");
$database=json_decode($json,true);
extract($database);
extract($dao[0]);
extract($dao[1]);