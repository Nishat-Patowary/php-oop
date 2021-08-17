<?php

use students as GlobalStudents;

class parentclass{
    public $property1 = "1";
    protected $property2 = "2";
    private $property3 = "3";
}

class childclass extends parentclass{
    
}

$ob= new childclass();
echo $ob->property1;

//--------------------------------------------------------//

class parentclass2{
    public $property1 = "1";
    protected $property2 = "2";
    private $property3 = "3";
}

class childclass2 extends parentclass2{

     public $property1 = "15";
}

$ob2= new childclass2();
echo $ob2->property1;

//-------------------------------------------------------//

class parentclass3{
    public $property1 = "1";
    protected $property2 = "2";
    private $property3 = "3";


    public function getproperty(){
        return $this->property2;
        }
}

   

class childclass3 extends parentclass3{

    protected $property2 = "50";
}

$ob3 = new childclass3();
echo $ob3->getproperty();

//-------------------------------------------------------//

class  parentclass4{
    public $property1 = "1";
    protected $property2 = "2";
    private $property3 = "3";

    public function getpro(){
        return $this->property2;
    }
}

class childclass4 extends parentclass4{
    protected $property2 = "120";
}

$ob4 =new childclass4();
echo $ob4->getpro();


//-------------------------------------------------------//


class student{
    public $roll1 = "1";
    protected $roll2 = "2";
    private $roll3 = "3";

    public function getroll(){
        return $this->roll2;
    }

}

class numbersd extends student{
    protected $roll2 = "20";

    public function getroll2(){

        $result = parent::getroll();
        return "this line : " . $result;
    }
}

$mix= new numbersd();
echo $mix->getroll2();
//-------------------------------------------------------//


class friend{
    public $name = "1";
    protected $age = "2";
    private $place = "3";

    public function getinfo() : string{
        return $this->age;
    }
}

class closed extends friend{
    protected $age = "20";

    
    public function getinfo2() : string{
        $result = parent::getinfo();
        return "This is a line  " . $result;
    }
}

$mic=new closed();
echo $mic->getinfo2();

//-------------------------------------------------------//



class friends{
    public $name = "1";
    protected $age = "2";
    private $place = "3";

    public function getinfo() : string{
        return $this->age;
    }
    public function printtext(string $text){
        echo $text;
    }
}

class closedd extends friends{
    protected $age = "20";

    
    public function getinfo2() : string{
        $result = parent::getinfo();
        return "This is a line  " . $result;
    }

    public function printtext($text)
    {
        echo $text;
    }
}

$mic=new closedd();
echo $mic->getinfo2();
?>