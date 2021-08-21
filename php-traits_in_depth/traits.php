<?php

use calculate as GlobalCalculate;
use nishat as GlobalNishat;
use second as GlobalSecond;

class plane{
   public function fly(){
    echo "the bird is flying<br>";
}
}

class helicopter{

    public function fly(){
        echo "The bird is flying<br>";
    }
}


$mix= new plane();
$Helicopter = new helicopter();

$mix->fly();
$Helicopter->fly();

//---------------------------------------------------//


trait myfriend{
    public function best(){
        echo "They are my friends<br>";
    }
}

class first{
    use myfriend;
}

class second{
    use myfriend;
}

$one= new first();
$one->best();

$two = new second();
$two->best();

//--------------------------------------------------------//

trait student{
    public function info(){

        echo "This is student number<br>";
    }
}

class first_student{
    use student;
}

class second_student{
    use student;
}

$student1= new first_student();
$student2= new second_student();

$student1->info();
$student2->info();

//------------------------------------------------------------//

trait animal{
    public function forest(){
        echo "The animal name<br>";
    }
}


class animal_first{
    use animal;
}

class animal_second{
    use animal;
}

$tiger= new animal_first();
$lion= new animal_second();

$tiger->forest();
$lion->forest();

//----------------------------------------------------------------//

class college{
    public function hyper(){
        echo "The college name is mupi<br>";
    }
}


class college_1 extends college{

}

class college_2 extends college{

}

$one= new college_1();
$two= new college_2();

$one->hyper();
$two->hyper(); 

//----------------------------------------------------------------//

class car{
    public function lamborgini(){
        echo "The car name is lamborgini<br>";
    }
}

class car_1 extends car{

}
class car_2 extends car{

}

$bmw= new car_1();
$odi= new car_2();

$bmw->lamborgini();
$odi->lamborgini();

//----------------------------------------------------------//



trait bike{
    public function bike_lover(){
        echo "This is a bike<br>";
    }
}

trait cars{
    public function car_lover(){

        echo "This is a car<br>";
    }
}
class bike_1{

    use bike, cars;
}

class bike_2{

    use bike,cars;
}


$mic= new bike_1();
$micc= new bike_2();

$mic->bike_lover();
$micc->bike_lover();

//------------------------------------------------------//

trait birds{
    public function beautiful(){
        echo "The bird is so beautiful<br>";
    }
}

trait bird2{
    public function cute(){
        echo "The bird is so cute<br>";
    }
}

class calculatec{
    use birds,bird2;
}

class calculated{
    use birds,bird2;
}

class cal{
    use bird2;
}

$num1= new calculatec();
$num1->beautiful();

$num2= new calculated();
$num2->beautiful();

$num3= new cal();
$num3->cute();

//----------------------------------------------------------//

trait flying{
    abstract public function fly();
}

trait bird{

    public function sky(){
        echo "The bird is flying<br>";
    }
}

class bird1{
    use flying, bird;
    public function fly(){
        echo "The bird is flying the sky 50km hour<br>";
    }
}

class bird_2{
    use flying,bird;
    public function fly(){
        echo "The bird is flying the sky 50km hour<br>";
    }
}

$bird_child= new bird1();
$bird_child->fly();


$bird_childs = new bird_2();
$bird_childs->fly();

//-----------------------------------------------------------------//


trait mobile{
    abstract public function iphone();
}

trait mobile_ang{
    public function  samsung(){
        echo "This is a angroid phone<br>";
    }
}


class phone1{
    use mobile,mobile_ang;
    public function iphone(){
        echo "iphone ios is the best for users<br>";
    }
}

class phone2{
    use mobile,mobile_ang;
    public function iphone()
    {
        echo "iphone ios is the best for users<br>";
    }
}


$user1= new phone1();
$user2= new phone2();


$user1->iphone();
$user2->iphone();

$user1->samsung();
$user2->samsung();

//----------------------------------------------------------//

trait fish{
    abstract public function swim();
    public function hello(){
        echo "The fish is swimming<br>";
    }
}

trait fishing{
    public function hello(){
        echo "The fish in a river<br>";
    }
}

class fishman{
    use fish,fishing{
        fish::hello insteadof fishing;
        fishing::hello as myself;
    }

    public function swim()
    {
        echo "The fish is swimming in a plant<br>";
    }
}

$first= new fishman();
$first->swim();
$first->hello();

//-------------------------------------------------------//

trait classroom{
    abstract public function student();
    public function stu_name(){
        echo "This is a classroom<br>";
    }
}

trait class_room{

    public function stu_name(){
        echo "This is a classroom<br>";
    }
}

class teacher{
    use classroom,class_room{
        classroom::stu_name insteadof class_room;
        class_room::stu_name as my_classroom;
    }

    public function student(){
        echo "The teacher come to the class<br>";
    }
}

$teach = new teacher();
$teach->stu_name();
$teach->student();

//------------------------------------------------------//

class a{
    public function hello(){
        echo "hello from class a";
    }
}

trait traitA{
    public function hello(){
        echo "hello from trait a";
    }
}

class b extends a{
    use traitA;
}

$miv= new b();
$miv->hello();

//--------------------------------------------------//


class nishat{
    public function one(){
        echo "The class from nishat";
    }
}

trait nihal{

    public function one(){
        echo "The class from nihal";
    }
}

class shanto extends nishat{
    use nihal;
}

$mib= new

//--------------------------------------------------//