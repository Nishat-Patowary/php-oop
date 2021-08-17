<?php 

abstract class detail{  //abstract start
    public $name;

    abstract protected function num($a,$b);  //abstract method
}

class names extends detail{  //drived class abstact increment
    public function num($a,$b){
        echo $a+$b;
    }
}

$calculate= new names();

$calculate->num(50,40);

//-----------------------------------------------//


abstract class nishat{
    public $name;

    abstract protected function fri($num,$numb);
    
}

class niloy extends nishat{
    public function fri($num,$numb){
        echo $num * $numb;
    }
}


$calcu=new niloy();
$calcu->fri(50,50);


//------------------------------------------//

abstract class fahim{  //abstract start
    public $name;
    abstract protected function num($a,$b);  //abstract method
}

class cyko extends fahim{  //abstract increment
    public function num($a,$b){
        echo $a + $b;
    }
}

$cal= new cyko();
$cal->num(50,90);

//------------------------------------------------//

abstract class bishal{
    public $name;
    abstract protected function number($a,$b);
}


class tamim extends bishal{
    public function number($a,$b){
        echo $a - $b;
    }
}

$mix=new tamim();
$mix->number(100,20);

//------------------------------------------------//

abstract class nihal{
    public $color;

    public function __construct($color)
    {
         $this->color = $color;
    }
    abstract public function getarea(): float;

    public function getcolor(){
        return $this->color;
    }
}

class nihat extends nihal{

    public function getarea(): float
    {
    
        
    }
}

$mic=new nihat("red");
echo $mic->color;
?>