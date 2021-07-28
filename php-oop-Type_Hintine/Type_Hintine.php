<?php 

function sum($A){
    echo $A + 10;
}

sum(50);

//------------------------------------------------//

function hyper(array $names){
    foreach($names as $name){
        echo $name. "<br>";
    }
}

$mix=["One","two","Three"];
hyper($mix);


//---------------------------------------------------------//

class hello{
    public function sayhello(){
        echo "This is my Home";
    }
}


class hy{
    public function sayhy(){
        echo "This is my car";
    }
}

function first( hello $c){
    $c->sayhello();
}

$mix=new hello();

first($mix);

//---------------------------------------------------------//


class nishat{
    public function one(){
        echo "This is a cat";
    }
}

class niloy{
    public function two(){
        echo "This is a dog";
    }
}

function second(niloy $b){
     $b->two();
}

$mixer= new niloy();
second($mixer);

//---------------------------------------------------------//


class school{
    public function getNames(student $names){
        foreach ($names->names() as $name){
            echo $name. "<br>";
        }
    }
}

class student{
    public function names(){
        return ["nishat","Bishal","tamim"];
    }
}
class library{

}

$lib= new library();
$stu= new student();
$sch= new school();

$sch->getNames($stu);


?>