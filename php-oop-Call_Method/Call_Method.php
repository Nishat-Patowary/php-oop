<?php 

class student{
    private $firstname;
    private $lastname;

    private function setname($fname,$lname){
        $this->firstname = $fname;
        $this->lastname = $lname;
    }

    public function __call($method, $argument)
    {
        echo "This is private method<br>";
    }
}

$mix= new student();
$mix->setname("Tanvirul","Nishat");

//------------------------------------------------------------------------------------------------//

class detail{
    private $firsname;
    private $lastname;

    private function setnames($nishat, $niloy)
    {
        $this->firsname = $nishat;
        $this->lastname = $niloy;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private method<br>";
        print_r($arguments);
    }
}

$mixer= new detail();

$mixer->setnames("Tanvieul","HQ");

//------------------------------------------------------------------------------------------------//


class nishat{
    private $myfirstname;
    private $mylastname;

    private function totalname($fname,$lname){
        $this->myfirstname = $fname;
        $this->mylastname = $lname;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private property and not exist<br>";

    }
}

$mixed= new nishat();

$mixed->myname();

//------------------------------------------------------------------------------------------------//


class friend{
    private $shanto;
    private $shihab;

    private function closs($closs1,$closs2){
        $this->shanto = $closs1;
        $this->shihab = $closs2;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){
            call_user_func_array([$this,$name], $arguments);
        }else{
            echo "The property exists";
        }
    }
}

$mixeerr= new friend();

$mixeerr->closs("Tanvirul","HQ","Nishat");

echo "<pre>";
print_r($mixeerr);
echo "</pre>";

//------------------------------------------------------------------------------------------------//

class mydetail{
    private $myname;
    private $myage;

    private function total($mynames,$myages){

        $this->myname = $mynames;
        $this->myage = $myages;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){
            call_user_func_array([$this,$name], $arguments);

        }else{
            echo "method doesnot exits";
        }
    }

}

$mixer= new mydetail();
$mixer->total("Tanvirul","HQ");

echo "<pre>";
print_r($mixer);
echo "</pre>"

//------------------------------------------------------------------------------------------------//

?>