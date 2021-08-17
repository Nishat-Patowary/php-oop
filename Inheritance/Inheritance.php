<?php 

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

?>