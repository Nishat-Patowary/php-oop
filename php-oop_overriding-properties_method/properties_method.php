<?php

class first{
    public $name="my name";
}

class second extends first{   //same property-----------
    public $name="my another name" . "<br>";  //override-------
}

$result=new first();
echo $result->name;

$result=new second();
echo $result->name;

//--------------------------//


class nishat{
    public $name="This is a car";
}

class niloy extends nishat{   //properties override
    public $name="This is another car";
}

$results=new nishat();
echo $results->name;

$results=new niloy();
echo $results->name;


//-------------------------------properties-override used---------------------------//


class number{
    public function word($a,$b){  //method override------
        return $a+$b;
    }
}

class numbers extends number{
    public function words($a,$b){  //method override-------
        return $a*$b; 
    }
}

$calculate=new number();
echo $calculate->word(50,50);


$calculate=new numbers();
echo $calculate->words(50,50);

//-------------------------------//


class word{
    public function number($a,$b){  //method override------
        return $a*$b;
    }
}

class words extends word{
   public function numbers($a,$b){  //method override------
       return $a+$b;
   }
}

$calcu=new words();
echo $calcu->number(50,50);

//-------------------------method override-------------------------//

?>