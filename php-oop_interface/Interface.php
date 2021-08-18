<?php 

interface partnet1{ //method make
    function nishat($a,$b);
}

interface partner2{  //method make
    function niloy($a,$b);
}

class partner3 implements partnet1,partner2{  //implements used
    public function nishat($a,$b){  //method  used
        echo $a + $b;
    }

    public function niloy($a,$b){  // method used
        echo $a * $b;
    }
}

$mix=new partner3();

$mix->nishat(50,30);
$mix->niloy(80,30);

//------------------------------------------------------------------//

interface friend1{
    function name($a,$b);
}

interface friend2{
    function names($a,$b);
}

class friend3 implements friend1,friend2{
    public function name($a,$b){
        echo $a + $b;
    }

    public function names($a,$b){
        echo $a - $b;
    }
}

$mixed=new friend3;

$mixed->name(100,300);

$mixed->names(500,200);

//------------------------------------------------------------------------------//


interface college1{
    function buddy($a,$b);
}

interface college2{
    function closs($a,$b);
}

class friend implements college1,college2{
    public function buddy($a,$b){
        echo $a + $b;
    }

    public function closs($a,$b){
        echo $a * $b;
    }
}

$hyper= new friend();
$hyper->buddy(500,130);
$hyper->closs(50,60);

//------------------------------------------------------------------------------//


interface myinterface{

    public function method();
    public function method2();
}

abstract class myclass implements myinterface{
    public function method2(){

    }
}


class myclass2 extends myclass{
    public function method(){

        echo "This is a php line";
    }
}

$mix= new myclass2();
echo $mix->method();
?>