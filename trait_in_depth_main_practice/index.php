<?php 

require_once "iron_man.php";
require_once "thor.php";
require_once "captain.php";
require_once "hulk.php";



$Thor= new thor_hammer();
$Thor->hammer();

$captain= new captain_hammer();
$captain->hammer();

$iron_man= new iron();
$iron_man->hammer();

$hulk= new hulk();
$hulk->hammer();
?>