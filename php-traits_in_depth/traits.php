<?php

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


?>