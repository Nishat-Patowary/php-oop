<?php 

class car{
    public $color= "red";
    private $weight=2000;

    static  $counter=0;

    public function __construct()
    {
        self::$counter++;
    }
}

$mix= new car();
echo car::$counter.PHP_EOL;
$mix= new car();
echo car::$counter.PHP_EOL;

//-------------------------------------------------------//


class bike{
    public $color= "blue";
    private $weight=500;

    static $counter=5;

    public function __construct()
    {
        self::$counter++;
    }
}

$mic= new bike();
echo bike::$counter.PHP_EOL;
$mic= new bike();
echo bike::$counter.PHP_EOL;
$mic= new bike();
echo bike::$counter.PHP_EOL;

//-------------------------------------------------------//

class bikes{
    public $color= "red";
    private $weight=1000;
    static $counter=0;
    public $mycounter=0;

    public function __construct()
    {
        $this->mycounter++;
        self::$counter++;
    }
}

$mixed= new bikes();
echo bikes::$counter. $mixed->mycounter . PHP_EOL;

$mixed= new bikes();
echo bikes::$counter. $mixed->mycounter . PHP_EOL;
//-------------------------------------------------------//


class animal{
    public $lion;
    private $weight=2000;
    static $number=5;
    public $mypet=5;

    public function __construct()
    {
        $this->mypet++;
        self::$number++;
    }
}

$mix= new animal();
echo animal::$number . $mix->mypet . PHP_EOL;
$mix= new animal();
echo animal::$number . $mix->mypet . PHP_EOL;

//-------------------------------------------------------//

?>