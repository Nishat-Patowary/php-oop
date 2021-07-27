<?php 

trait base{  //traid make--------
    public function name(){
        echo "hello everyone";
    }
}

class nishat{
    use base;  //traid use--------
}

class niloy{
    use base;  //traid use-----
}

$mix= new nishat();  //first object---------
$mix-> name();

$mixer= new niloy();  //second object----------
$mixer-> name();

//-----------------------------first-practice ---------------------------------------------//


trait hyper{  
    public function hydra(){
        echo "This is a home";
    }
}

class bishal{
    use hyper;
}

class momin{
    use hyper;
}

$calculate= new bishal();
$calculate->hydra();

$cal=new momin();
$cal-> hydra();

//-----------------------------second-practice ---------------------------------------------//


trait hello{   //trait make----------
    public function sayhello(){
        echo "This is a home";
    }
}

trait bye{  //trait make--------
    public function saybye(){
        echo "This is a village";
    }
}

class basedd{
   use hello;  //trait use---------
}

class bases{
    use bye;  //trait use------------
}

$mix=new basedd();  //first object------
$mix->sayhello();

$mix=new bases();  //second object---------
$mix-> saybye();

//-----------------------------second-practice ---------------------------------------------//


trait first1{
    public function name1(){
        echo "This is a girl";
    }
}

trait first2{
    public function name2(){
        echo "This is another girl";
    }
}

class closs1{
    use first1,first2;
}

class closs2{
    use first2;
}

$col=new closs1();
$col-> name2();


?>