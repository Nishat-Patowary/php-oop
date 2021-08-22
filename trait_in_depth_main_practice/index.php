<?php 

require_once "iron_man.php";
require_once "thor.php";
require_once "captain.php";
require_once "hulk.php";



$Thor= new thor_hammer();
$Thor->hammer();
$thor_place= new thor_place();
$thor_place->asgard();


$captain= new captain_hammer();
$captain->hammer();
$captain_america= new captain_america();
$captain_america->captain();


$iron_man= new iron();
$iron_man->hammer();
$iron_shut= new iron_shut();
$iron_shut->shut();

$hulk= new hulk();
$hulk->hammer();
$hulk_angry= new hulk_angry();
$hulk_angry->angry_man();
?>