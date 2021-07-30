<?php

use students as GlobalStudents;

class student{
    public $colam;
    private $first_name;
    private $last_name;

    public function setname($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
}

$mix= new student();
$mix->colam = "Tanvirul HQ Nishat";

echo isset($mix->colam);

//----------------------------------------------------------------------------------//

class closs{
    public $friend;
    private $first;
    private $second;

    public function setup($one,$two){
        $this->first = $one;
        $this->second = $two;
    }
}

$mixer= new closs();
$mixer->setup = "Tanvirul";
echo isset($mixer->setup);

//----------------------------------------------------------------------------------//


class students{
    public $bishal;
    private $momin;
    private $tanvir;

    public function setnames($first,$second){
        $this->momin = $first;
        $this->tanvir = $second;
    }

    public function __isset($name)
    {
        echo isset($this->$name);
    }
}

$mixed= new students();
$mixed->setnames("Tanvir","Nishat");
echo isset($mixed->momin);


//----------------------------------------------------------------------------------//

class animals{
    public $bird;

    private $lion;
    private $tiger;

    public function setup($first,$second){

        $this->lion = $first;
        $this->tiger =$second;
    }
    public function __isset($name)
    {
        echo isset($this->name);
    }
}

$mic= new animals();
$mic->setup("Tanvirul","hq");
echo isset($mic->lion);

//----------------------------------------------------------------------------------//


class friend{
    public $nishat;
    private $sobuj;
    private $parvez;
    private $shanto=["name"=>"mahmudul","age"=>"21"];

    public function closs($best,$closed){
        $this->sobuj= $best;
        $this->parvez = $closed;
    }

    public function __isset($name)
    {
        echo isset($this->shanto[$name]);
    }
}

$mixeds= new friend();
echo isset($mixeds->name);
?>