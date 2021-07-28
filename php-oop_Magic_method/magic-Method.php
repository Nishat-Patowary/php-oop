<?php 

class nishat{
    public function name(){  //normal method start
        echo "This is a line<br>";
    }
}

$mix= new nishat();
$mix->name(); //normal method used


//-----------------------normal method----------------------//


class niloy{
    public function __construct()   //magic method start
    {
        echo "This is a home<br>";
    }
}

$mixer=new niloy();  //magic method used

//-------------------------------magic method------------------------------------//

class bishal{
    public function __construct()
    {
        echo "This is a cat";
    }
}

$mixed= new bishal();

?>