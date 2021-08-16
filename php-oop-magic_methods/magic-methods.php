<?php

use student as GlobalStudent;

class person{
    public $name = "nishat";
    private $number = 12345;

   
    public function __toString()
    {
        return "name: $this->name . number: $this->number<br>";
    }
}

$detail= new person();
echo $detail;

//-------------------------------------------------//

class studentt{
    public $name= "niloy";
    private $number = 12346;


    public function __toString()
    {
        return "name: $this->name . number: $this->number<br>";
    }
}

$mix= new studentt();
echo $mix;

//-------------------------------------------------//


class infos{
    public $name = "nihal";
    private $age= 21;

    public function __toString()
    {
        return "name: $this->name . age: $this->age<br>";
    }
}

$mic= new infos();
echo $mic;

//------------------------   tostring used  ----------------------------//

class persons{
    public $name = "shanto";
    private $age = 21;

    public function __get($personname)
    {
        if($personname === "username"){
            return $this->name;
        }
        return "property \"$personname\" does not exists";
    }
}

$info= new persons();
echo $info->username;

//-------------------------------------------------//


class friend{
    public $name = "shihab";
    private $number =112352;

    public function __get($pername)
    {
        if($pername === "usernames"){
            return $this->name;
        }
        return "property \ $pername\" does not exists";
    }
}

$mixed= new friend();
echo $mixed->usernames;

//-------------------------------------------------//


class friends{
    public $name = "omer";
    private $age = 21;

    public function __get($friendname)
    {
        if($friendname === "friendlist"){
            return $this->age;
        }
        return "property \ $friendname\ does not exists";
    }
}

$miv= new friends();
echo $miv->friendlists;

//---------------------------  get-method used  ----------------------------//


class infoc{
    public $name= "first";
    public $age =21;

    public function __set($name, $value)
    {
        var_dump($name,$value);
    }
}

$t= new infoc();
echo $t->username="nishat";

//-------------------------------------------------//

class friendc{
    public $name = "shihab";
    private $phone =1135464;

    public function __set($frname, $frvalue)
    {
        var_dump($frname,$frvalue);
    }
}

$y= new friend();
echo $y->closs= "shanto";

//-------------------------------------------------//


class animal{
    public $name= "monkey";
    private $king = "lion";

    public function __set($kiname, $kivalue)
    {
        if($kiname === "kings"){
            $this->name = $kivalue;
        }
    }
}

$f= new animal();
$f->kings= "the forest king";
echo $f->name;

//-------------------------------------------------//


class birds{
    public $first = "one";
    public $second = "two";

    public function __set($birname, $birvalue)
    {
        if($birname === "beautiful"){

            $this->first = $birvalue;
        }
    }
}

$r= new birds();
$r->beautiful = "The bird is so beautiful";
echo $r->first;

//----------------------------  set_method used  -----------------------------//


class man{
    public $name = "hamida";
    private $number = 24213553;

    public function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }

    public function getphone(){
        return $this->number;
    }
}

$i=new man();
echo $i->getphone();

//-------------------------------------------------//


class woman{
    public $name= "himel";
    private $address = "dhaka";

    public function __call($woname, $woarguments)
    {
        var_dump($woname,$woarguments);
    }

    public function getaddress(){
        return $this->address;
    }
}

$w= new woman();
echo $w->getaddress();

//-------------------------------------------------//


class students{
    public $name = "rakib";
    private $phone = 12345;

    public function __call($name, $arguments)
    {
        if($name === "getmobilephone"){
            return $this->getphone();
        }else if ($name === "setmobilephone"){
            $this->setphone($arguments);
        }
    }

    public function getphone(){
        return $this->phone;
    }

    public function setphone($phone){
        $this->phone = $phone;
    }
}
 

$c= new students();
echo $c->getmobilephone();

$c->setphone("1111111");
echo $c->getphone();
?>