<?php

use student as GlobalStudent;

class student{
    private $name;

    public function __get($property)
    {
        echo "Trying to access private property($property)<br>";

    }
    
    public function __set($name, $value)
    {
        echo "This is not existing private property<br>";
    }
}

$mix=new student();
$mix->name="Tanvirul HQ NIshat";

//-------------------------------------------------------------------------//


class teacher{
    private $detail;

    public function __get($name)
    {
        echo "you are trying to access private($name)function";

    }

    public function __set($name, $value)
    {
        echo "you are not access private function<br>";
    }
    
}

$mixer= new teacher();

$mixer->hyper="Tanvirul";


//-------------------------------------------------------------------------//


class students{
    private $information;
    
    public function __get($first)
    {
        echo "You are trying to access private property($first)<br>";
    }

    public function __set($name, $value)
    {
        echo "This is a private property<br>";
    }
}

$mixed= new students();

$mixed->information="this is my home";


//-------------------------------------------------------------------------//


class birds{
    private $names;
    public function hello(){
        echo $this->names;
    }

    public function __get($name)
    {
        echo "This is a private property<br>";
    }

    public function __set($name, $value)
    {
  
        if(property_exists($this,$name)){
 
            $this->$name = $value;
        }else{
echo "property does not exists : $name";
        }
    }
}

$cal= new birds();

$cal->names="The bird is so beautiful<br>";

$cal->hello();

//-------------------------------------------------------------------------//


class animal{
    private $lion;

    public function brother(){
        echo $this->lion;
    }
    public function __get($hyper)
    {
        echo "This is a private property<br>";
    }

    public function __set($niloy, $nishat)
    {
        if(property_exists($this, $niloy)){
            $this->$niloy = $nishat;
        }else{
            echo "Thiis program exixts : $niloy";
        }
    }
}

$mixeed=new animal();

$mixeed->lion="The lion is a king<br>";
$mixeed->brother();

//-------------------------------------------------------------------------//


class bird{
    private $first;

    public function birds(){
        echo $this->first;
    }
    public function __get($name)
    {
        echo "This is a private property";
    }

    public function __set($one, $two)
    {
        if(property_exists($this,$one)){
            $this->$one= $two;
        }
    }
}


$calculate= new bird();

$calculate->first="The bird is so beautiful";

$calculate->birds();
?>