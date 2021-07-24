<?php 
class person{
    public $name = "No Name";
    public $age =0; 

    function show(){
        echo $this->name."<br>";
        echo $this->age . "<br>";
    }
}

$p1= new person(); //object make..... 

$p1->name = "Tanvirul HQ"; //value set.....
$p1->age = 20;   //value set.....

$p1->show(); //function call........

//------------normal over coding------------------//




class detail{
    public $name;
    public $age;

    function __construct($myname ="no name",$myage=0){
    $this->name = $myname;
    $this->age = $myage;
    }
    function show(){
        echo $this->name."<br>";
        echo $this->age . "<br>";
    }
    
}

$a1= new detail("tanvirul",20);
$a2= new detail("shanto",21);
$a3= new detail("shihab",20);
$a4= new detail("omer",22);


$a1->show();
$a2->show();
$a3->show();
$a4->show();


//-------------------constructor used---------------//

?>