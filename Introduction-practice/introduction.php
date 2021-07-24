<?php 

class calculation{
    public $a,$b,$c;   //properties used..........
   
    function sum(){   //methods used............
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){   //methods used..........
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();  //object called.....
$c1->a = 50;
$c1->b = 40;


$c2 = new calculation();  //object called.......
$c2->a = 50;
$c2->b = 20;


echo "sum value of c1 : " .  $c1->sum(). "<br>";
echo "sub value of c1 : " .  $c1->sub(). "<br>";


echo "sub value of c2 : " .  $c2->sub()."<br>";
echo "sum value of c2 : " .  $c2->sum()."<br>";



//---------------second-practice------------//



class number{
    public $x,$y,$z;

    function sum(){
        $this->z= $this->x + $this->y;
        return $this->z;
    }

    function sub(){
        $this->z = $this->x - $this->y;
        return $this->z;
    }
}


$z1= new number();
$z1->x = 20;
$z1->y = 30;

$z2= new number();
$z2->x = 50;
$z2->y = 40;


echo "sub value of :" . $z1->sub()."<br>";
echo "sum value of :" . $z1->sum(). "<br>";

echo "sub value of :" . $z2->sub()."<br>";
echo "sum value of :" . $z2->sum(). "<br>";

?>