<?php 

class base{
    public $name;  //--------public---------//

    public function __construct($n){  //--------public---------//
        $this->name=$n;
    }

    public function show(){  //--------public---------//
        echo "my name is " . $this->name . "<br>";
    }

}

$nick= new base("Tanvirul");  //----------public so access any-places------------//
$nick->show();


//---------------------------------------------------------------------------//

class baseform{
    public $name;

    public function __construct($n){
       $this->name=$n;
    }

    public function total(){
        echo "This is my " .$this->name ."<br>";
    }
}

$t1=new baseform("tanvirul nishat");
$t1->total();


//----------------------------------public access used------------------------------------//


class based{
    protected $name;

    public function __construct($m){
        $this->name=$m;
    }

    protected function show(){
        echo "my name is " .$this->name . "<br>";
    }
}


class derived extends based{
   public function get(){
       echo "my name is : " .$this->name . "<br>";

   }
}

$nicked=new derived("tanvirul HQ");
$nicked->get();

//----------------------------------------------------------------------------------//

class proper{
    protected $name;
    
   public  function __construct($n){
        $this->name=$n;
    }

    protected function show(){
        echo "my name is " .$this->name . "<br>";
    }
}

class hyper extends proper{
    public function get(){
        echo "my name is " .$this->name . "<br>";

    }
}

$nick=new hyper("tanvirul nishat");
$nick->get();

//----------------------------------------------------------------------//


class info {
    protected $name;

    public function __construct($n){
        $this->name=$n;
    }

    protected function show(){
        echo "my name is " .$this->name . "<br>";
    }
}

class hypers extends info{
    
    public function get(){
        echo "my name is " .$this->name . "<br>";
    }
}

$detail= new hypers("Mahmudul hasan");
$detail->get();

//-----------------------protected access used-----------------------//


class name{
    private $name;


public function __construct($n){
        $this->name=$n;
    }

    public function show(){
        echo "my name is " .$this->name . "<br>";
    }

}

class extrem extends name{
    public function get(){
        echo "my name is " .$this->name . "<br>";
    }
}
$test= new name("tanvirul hq");
$test->show();


//--------------------------------------private access used------------------------------------//

?>

