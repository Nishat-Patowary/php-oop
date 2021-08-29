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

interface birds{
    public function bird1();
}

interface  bird_2 extends birds{
    public function bird2();
}

class bird_class implements bird_2{
    public function bird1(){
        echo "This is bird number 1<br>";
    }

    public function bird2(){
        echo "This is bird number 2<br>";
    }
}

$bird= new bird_class();
echo $bird->bird1();
echo  $bird->bird2();

//-----------------------------------------------------------------//


interface bike{
    public function firstbike();
    public function secondbike();
}

interface bikes extends bike{
    public function secondbike();
}

class bike_showroom implements bikes{
    public function firstbike(){
        echo "The bike brand is yamaha<br>";
    }

    public function secondbike()
    {
        echo "The bike brand is suzuki<br>";
    }
}

$bike_show= new bike_showroom();
echo $bike_show->firstbike();
echo $bike_show->secondbike();

//-----------------------------------------------------------------//


interface children{
    public function first_child();
}

interface children2{
    public function second_child();
}

interface children3 extends children,children2{
    public function third_child();
}

class childhome implements children3{
    public function first_child()
    {
        echo "the child number is one<br>";
    }

    public function second_child()
    {
        echo "the child number is one<br>";
    }

    public function third_child()
    {
        echo "the child number is one<br>";
    }
}

$child_teacher = new childhome();
echo $child_teacher->first_child();
echo $child_teacher->second_child();
echo $child_teacher->third_child();

//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//
//-----------------------------------------------------------------//











?>