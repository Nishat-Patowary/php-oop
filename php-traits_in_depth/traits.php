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


?>