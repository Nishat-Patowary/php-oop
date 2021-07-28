<?php

trait hello{
    public function sayhello(){ //seoond used
        echo "This is my wife";
    }
}

class hy{
    public function sayhello(){  //third used
        echo "This is my child";
    }
}

class some extends hy{
    use hello;
    public function sayhello(){ //first used internal 
        echo "This is my Dog";
    }
}

$mix=new some();
$mix->sayhello();


//-----------------------first-prb solved------------------------------------//

trait nishat{  //trait first
    public function child(){ 
        echo "THis is a car";
    }
}

trait niloy{  //trait second 
    public function child(){
        echo "This is another car";
    }
}

class bishal {
    use nishat,niloy{  //used 2 trait
        nishat::child insteadof niloy;  //first trait used and second off

    }
}

$calculate=new bishal();

$calculate->child();


//--------------------------------------------------------------------------//


trait first{
    public function myself(){
        echo "This is a bird";
    }
}

trait second{
    public function myself(){
        echo "This is a lion";
    }
}

class third{
    use first,second{
        second::myself insteadof first;
    }
}

$four= new third();
$four->myself();

//--------------------------------------------------------------------------//
?>