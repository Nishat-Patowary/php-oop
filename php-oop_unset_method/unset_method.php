<?php 

class student{
    public $course="development";
    private $firstname;
    private $lastname;

    public function setname($fname,$lname){
        $this->firstname= $fname;
        $this->lastname = $lname;
    }
}

$mix= new student();
unset ($mix->course);
echo $mix->course;


//-----------------------------------------------------------------------------------//

class friend{
    public $closs;
    private $closs1;
    private $closs2;

    public function clossall($best1,$best2){
        $this->closs1 = $best1;
        $this->closs2 = $best2;
    }
    public function __unset($name)
    {
        unset($this->closs1);
    }
}

$mixed= new friend();
$mixed->clossall("shanto","shihab");
unset($mixed->closs1);
echo "<pre>";
print_r($mixed);
echo "</pre>";

//-----------------------------------------------------------------------------------//

class animal{
    public $monkey;
    private $lion;
    private $tiger;

    public function danger($lions,$tigers){
        $this->lion = $lions;
        $this->tiger = $tigers;
    }

    public function __unset($name)
    {
        unset($this->lion);
    }
}

$mixer=new animal();
$mixer->danger("bishal","momin");
unset($mixer->lion);
echo "<pre>";
print_r($mixer);
echo "</pre>";
?>