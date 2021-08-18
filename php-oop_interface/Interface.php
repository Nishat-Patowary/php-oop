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

        echo "This is a php line<br>";
    }
}

$mix= new myclass2();
echo $mix->method();

//------------------------------------------------------------------------------//


interface myfriend{
    public function firstfriend();
    public function secondfriend();
}

abstract class clossfriend implements  myfriend{
    public function firstfriend(){

    }
}

class clossfriendname extends clossfriend{
    public function secondfriend()
    {
        echo "my closs friend";
    }
}

$mic= new clossfriendname();
echo $mic->secondfriend();

//------------------------------------------------------------------------------//


interface myclassmate{
    public function first();
    public function second();
}

interface myclassmate2{
    public function second();
}

class myclassr implements myclassmate,myclassmate2{
    public function first(){

        echo "This is my first classmate<br>";
    }

    public function second(){

        echo "This is my second classmate<br>";
    }
}

$classmate= new myclassr();
echo $classmate->first();
echo $classmate->second();

//-----------------------------------------------------------------//

interface mycar{
    public function firstcar();
    public function secondcar();
}

interface mycar2{
    public function secondcar();
}

class myhome implements mycar,mycar2{
    public function firstcar(){
        echo "The car brand is lamborgini<br>";
    }

    public function secondcar()
    {
        echo "The car brand is bmw<br>";
    }
}


$mix= new myhome();
echo $mix->firstcar();
echo $mix->secondcar();

//-----------------------------------------------------------------//



?>