<?php 

class calculate{
    public $a,$b;

    public function __construct($x,$y){
        $this->a = $x;
        $this->b = $y;
    }

    public function __invoke()
    {
        echo $this->a + $this->b;
    }
}

$mix= new calculate(100,50);
$mix();


//-----------------------------------------------------------//

class calculation{
    public $a,$b;

    public function __construct($x,$y)
    {
        $this->a = $x;
        $this->b = $y;
    }

    public function __invoke()
    {
        echo $this->a * $this->b;
    }
}

$mixer= new calculation(50,30);
$mixer();

//-----------------------------------------------------------------------//

class calculator{
    public $a,$b;

    public function __construct($x,$y)
    {
        $this->a = $x;
        $this->b = $y;
    }

    public function __invoke(){
        echo $this->a - $this->b;
    }
}

$mixed= new calculator(200,60);
$mixed();

//-----------------------------------------------------------------------//

class calculations{
    public $a,$b;

    public  function __construct($x,$y)
    {
        $this->a =$x;
        $this->b = $y;
    }

    public function __invoke()
    {
        echo $this->a / $this->b;
    }
}

$mixers= new calculations(500,50);
$mixers();
?>