<?php 

class friend{

    public function __toString()
    {
        return "could not print this..<br>";
    }
}

$mix= new friend();
echo $mix;

//-----------------------------------------------------------------------------------//

class animal{
    public function __toString()
    {
        return "could not print object as a string of class<br> ";

    }
}

$mixer= new animal();
echo $mixer;

//-----------------------------------------------------------------------------------//

class friends{
    public function __toString()
    {
        return "This is a object.so its does not print";

    }
}

$mixed= new friends();
echo $mixed;
?>