<?php

use teacher as GlobalTeacher;

class employee{
    public $name;
    public $age;
    public $salery;

    function __construct($a,$b,$c){
       
    $this->name=$a;
    $this->age=$b;
    $this->salery=$c;
    }
    
    function info(){
        echo "<h3>Employee profile</h3>";
        echo "employee name : " . $this->name . "<br>";
        echo "employee age : " .$this->age . "<br>";
        echo "employee salery " .$this->salery . "<br>";

    }
}
$t1=new employee("tanvirul",21,5000);
$t1->info();



//used inheritance to used data easely....... 

class manager extends employee{  //------------used entends-----------------

}

$t2= new manager("shihab",20,2000);
$t2->info();

//------------------practice-1------------------//


class workers{
    public $name;
    public $age;
    public $salery;

    function __construct($a,$b,$c){
        $this->name=$a;
        $this->age=$b;
        $this->salery=$c;
    }

    function info(){
        echo "<h3>workers details</h3>" . "<br>";
        echo "workers name is :" .$this->name . "<br>";
        echo "workets age is "  .$this->age . "<br>";
        echo "workets salery is" . $this->salery . "<br>";

    }
}
$w1= new workers("Nishat",20,5000);
$w1->info();

//------------------------//

class chairman extends workers{    //------------used entends-----------------
    public $ta=1000;
    public $phone=5000;
    public $salary=2000;
    public $totalsalary;

    function info(){
        $this->totalsalary= $this->salary + $this->ta + $this->phone;

        echo "<h3>charmen details</h3>" . "<br>";
        echo "workers name is :" .$this->name . "<br>";
        echo "workets age is "  .$this->age . "<br>";
        echo "workets salery is" . $this->totalsalary . "<br>";

    }
}

$y1= new chairman("shanto",20,5000);
$y1->info();

//------------------practice-2------------------//


class employer{
    public $name;
    public $age;
    public $place;
    public $income;

    public function __construct($n,$a,$p,$i)
    {
        $this->name= $n;
        $this->age = $a;
        $this->place = $p;
        $this->income = $i;
    }

    function info(){
        echo "<h1>This is my profile</h1>";
        echo "employe name is ".$this->name . "<br>";
        echo "employe age is ".$this->age . "<br>";
        echo "employe place is ".$this->place . "<br>";
        echo "employe income is ".$this->income . "<br>";
    }
}

$emplo= new employer("nishat",21,"dhaka",50000);
$emplo->info();


//--------------------------practice-3-------------------------------//

class worker{
    public $name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age =$a;
        $this->salary = $s;

    }

    function calcu(){
        echo "<h1>Worker information</h1>";
        echo "Worker name is " .$this->name . "<br>";
        echo "worker age is " . $this->age . "<br>";
        echo "worker salary is " . $this->salary . "<br>";
    }
}

$work= new worker("hasan",25,5000);
$work->calcu();

class managers extends worker{
    public $car= 2000;
    public $phone = 5000;
    public $overtime = 5000;
    public $totalincome;

    function calcu(){
        $this->totalincome = $this->car + $this->phone + $this->overtime;
        echo "<h1>Manager information</h1>";
        echo "The manager name is " . $this->name . "<br>";
        echo "The manager age is " . $this->age . "<br>";
        echo "The manager salary is " . $this->totalincome . "<br>";
    }
}

$manag= new managers("Tanvirul",21,10000);
$manag->calcu();
//--------------------------practice-4-------------------------------//


?>