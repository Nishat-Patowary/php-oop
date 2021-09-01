<?php



class myclass{
    public function name(){
        echo "class name :" . get_class($this)."<br>";
    }
}

$mix= new myclass();
$mix->name();

//----------------------------//

class myname{
    public function names(){
        echo "This is :". get_class($this)."<br>";
    }
}

$mixer= new myname();
$mixer->names();

echo "This is :" . get_class($mixer)."<br>";

//----------------------------//

class animal{
    public function tiger(){
        echo "This is " . get_class($this) . "<br>";
    }
}

$miv=new animal();
$miv->tiger();

//----------------------------//
//----------------------------//
//----------------------------//
//----------------------------//
//----------------------------//
//----------------------------//
//----------------------------//


class my_friend{
    public function closs(){
        echo "This is my ". get_class($this) . "<br>";
    }
}

$friend= new my_friend();
$friend->closs();
//---------------get_class use-------------------//


class abc{

}

class xyz extends abc{
    function name(){
        echo "The parent class is :" . get_parent_class($this)."<br>";
    }
}
$mixers= new xyz();
$mixers->name();


//----------------------------//

class nishatt{

}

class niloy extends nishatt{
    function name(){
        echo "The parent class is:" . get_parent_class($this)."<br>";

    }
}

$mix1= new niloy();
$mix1->name();

 //---------------------get_parent_class use ------------------------//

class func{
    function __construct()
    {
        
    }

    function myfunction(){

    }

    function myfunction2(){

    }
}

$allfunction= get_class_methods("func");

print_r($allfunction); 

//-----------------------------------------------------------------//

class funs{
    function __construct()
    {
        
    }

    function first(){

    }

    function second(){

    }
}

$mix= get_class_methods("funs");
print_r($mix);
foreach($mix as $methods);
echo $methods;

//---------------------get_class_methods use---------------------------------//


class soikot{
    public $first;
    public $second="Hello";
    public $third=500;
    private $four;
    
    function __construct()
    {
        print_r(get_class_vars(__CLASS__));
    }
}



$col= new soikot();
$col2= get_class_vars(get_class($col));

print_r($col2);

//----------------------------//

class hyper{
    public $one;
    public $two="number";
    public $three=50;
    private $four;

    function __construct()
    {
        print_r(get_class_vars(__CLASS__));
    }
}

$calculate= new hyper();

$calcu= get_class_vars(get_class($calculate));
print_r($calcu);

//-----------------get_class_vars used------------------------//


class abcs{
    static public function test(){
        var_dump(get_called_class());
    }
}

class xyzz extends abcs{

}

abcs::test();

xyzz::test();

//-------------------------------//

class tanvir{
    static public function testing(){
        var_dump(get_called_class());
    }
}

class sobuj extends tanvir{

}

tanvir::testing();
sobuj::testing();


//------------------------get_called_class <used--------------------------------->

interface name{

}
class bishu{

}

class momins extends bishu{

}

print_r(get_declared_interfaces());

//------------------------------------//

interface mine{

}

class first{

}

class second extends first{

}

print_r(get_declared_interfaces());

//--------------------get_declared_interfaces used -----------------------------------//



trait one{

}

class first1{
    use one;
}

print_r(get_declared_traits());

//----------------------------//

trait one1{

}

trait one2{

}

trait one3{

}

class first3{
    use one1,one2,one3;
}

print_r(get_declared_traits());

//------------------------get_declared_traits used----------------------------------//

