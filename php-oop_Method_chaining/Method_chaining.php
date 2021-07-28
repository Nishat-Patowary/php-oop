<?php 

class nishat{
    public function first(){
        echo "This is first line<br>";
    }
    public function second(){
        echo "This is second line<br>";
    }

    public function third(){
        echo "This is third line<br>";
    }
}

$mix= new nishat();
$mix->first();
$mix->second();
$mix->third();

//----------------------------normal method used------------------------//

class niloy{
    public function one(){
   echo "This is my wife<br>";
   return $this;
    }

    public function two(){
        echo "This is my child<br>";
        return $this;
    }

    public function three(){
        echo "This is my baby";
    }
}

$mixer= new niloy();

$mixer->one()->two()->three();


//-------------------------------method chaining used---------------------------//


class bishal{
    public function five(){
        echo "This is a home<br>";
        return $this;
    }

    public function six(){
        echo "This is a another home<br>";
        return $this;
    }

    public function seven(){
        echo "This is a human";
    }
}

$calculate= new bishal();

$calculate->five()->six()->seven();

//---------------------------------------------------------------------//

?>