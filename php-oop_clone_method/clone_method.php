<?php

use student as GlobalStudent;

class student{
    public $name;
    public $section;

    public function __construct($n)
    {
        $this->name = $n;
    }
}
$student1= new student("Tanvirul HQ");
$student2= $student1;
$student2->name= "Mahmudul Hasan<br>";
echo $student1->name;

//-----------------------------------------------------------------------//

class animal{
    public $first;
    public $second;

    public function __construct($f)
    {
        $this->first = $f;
    }
}

$one= new animal("tiger<br>");
$two = clone $one;
$two->first= "lion<br>";
echo $one->first;
echo $two->first;

//-----------------------------------------------------------------------//

class subject{
    public $math;
    public $english;

    public function __construct($mt)
    {
        $this->math = $mt;
    }  
    public function setcourse(english $c)
    {
        $this->english  = $c;
    }  
}

class english{
    public $names;
    public function __construct($en){
        $this->names= $en;    
    }
}

$project= new subject("tanvirul Hq<br>");
$english1= new english("php develop");


$projects= clone $project;

$project->setcourse($english1);
$projects->math="Mahmudul Hasan";

print_r($project);



//-----------------------------------------------------------------------//



class program{
    public $website;
    public $app;

    public function __construct($wb)
    {
        $this->website = $wb;
    }

    public function setapp(app $ap){
        $this->app = $ap;
    }
}

class app{
    public $apps;
    public function __construct($visit)
    {
        $this->apps = $visit;
    }
}


$program= new program("develop by me");

$apps= new app("developing");

$programs= clone $program;

$program->setapp($apps);

$programs->website="this is a website";

echo "<pre>";
print_r($program);
echo "</pre>"






?>