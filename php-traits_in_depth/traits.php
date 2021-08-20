<?php 


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

?>