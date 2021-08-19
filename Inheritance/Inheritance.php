<?php

use employee as GlobalEmployee;
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

class hyper extends student{
    protected $roll2 = "20";

    public function getroll2(){

        $result = parent::getroll();
        return "this line : " . $result;
    }
}

$mix= new hyper();
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

    public function printtext( string $text)
    {
        echo $text;
    }
}

$mic=new closedd();
echo $mic->getinfo2();

//-------------------------------------------------------//


class myclass{
    public $property1 = "1";
    protected $property2 = "2";
    private $property3 = "3";

    const my_constant = "my constant";
}

class  nishat extends myclass{
    protected $property2 = "22";

    const my_constant = "second_class";

}

$mic= new nishat();
echo $mic::my_constant;




class workers{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name,$age,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello(){
        return "hello from person";
    }
}

class employee extends workers{
    private $salary;

    public function __construct($name,$age,$phone,$salary)
    {
        parent::__construct($name,$age,$phone);
        $this->salary = $salary;
    }

    public function hello(){
        return "I am an employe:  $this->name";
    }

}

$employe= new employee( name:"Nishat" , age:21 , phone:21542, salary:5000 );
echo $employe->hello();


//--------------------------------------------------------//

class best{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name,$age,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function bondhu(){
        return "This is my best friend";
    }
}

class bestfriend extends best{
    private $place;

    public function __construct($name,$age,$phone,$place)
    {
        parent::__construct($name,$age,$phone);
            $this->place = $place;
    
    }

    public function bondhu(){
        return "This is my best friend";
    }
}

$miv= new bestfriend(name: "shanto", age: 21, phone:033666, place:"dhaka");
echo $miv->bondhu();

//----------------------------------------------------------------//

?>