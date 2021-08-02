<?php 

class myname{
    public $name;
}

class_alias("myname","mt");

$mix=new myname();
$mix->name="Tanvirul";
echo $mix->name;

//----------------------------//

class myhome{
    public $home;
}

class_alias("myhome","tanvir");

$mixer= new myhome();
$mixed= new tanvir();

$mixed->home= "This is my home";
echo $mixed->home;

?>