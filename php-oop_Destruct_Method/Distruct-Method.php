<?php 

class nishat{
    public function first(){  //normal method start
        echo "This is my home<br>";
    }
}


$mix= new nishat();
$mix->first();  //normal method used


//-------------------normal method used-------------------------------------//




class niloy{
    public function __construct()  //construct method start
    {
        echo "This is my wife<br>";
    }
}

$mixer= new niloy(); 

//construct method auto used--

//------------------------------------------//

class nihal{
    public function __construct()
    {
        echo "This is my child<br>";
    }
}

$mixers= new nihal();


//------------------construct method used---------------------------------------//





class bishal{
    public function __destruct()
    {
        echo "This is a car<br>";
    }
}

$mixed= new bishal();

//--------------------------------------------//

class tanvir{
    public function __destruct()
    {
        echo "This is a line<br>";
    }
}

$total= new tanvir();

//--------------------------------------------//


class momin{
    public function __destruct()
    {
        echo "This is a car and i sell this..";
    }
}

$totals= new momin();


//----------------------distruct method used---------------------------//

?>