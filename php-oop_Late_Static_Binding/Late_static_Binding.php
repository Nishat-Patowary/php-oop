<?php 

class bases{
    protected static $name= "tanvirul";

    public function show(){
        echo static::$name;

    }
}

class deliver extends bases{
    protected static $name= "Nishat";
}

$mix=new bases();

$mix->show();

//----------------------------------------------------------------------------//

class baseds{
    protected static $name = "Mahmudul";
   
    public function show(){
        echo static::$name;
    }
}


class formal extends baseds{
    protected static $name = " Hasan";
}

$mixer=new formal();
$mixer->show();

//----------------------------------------------------------------------------//

class first{
    protected static $name= "tanvirul";

    public function show(){
        echo self::$name;
        echo static::$name;
    }
    
}

class second extends first{
    protected static $name= "Nishat";
}

$cal=new first();
$cal->show();

$cal=new second();
$cal->show();

