<?php 

class nishat{
    public  static $name= "Tanvirul HQ";  //static used

    public function show(){  
        echo self::$name; 
    }
}
echo nishat::$name;

//--------------------------------------------//


class niloy{
    public static $name =  "nishat";

    public function show(){
        echo self::$name;
    }
}

$mix= new niloy();
$mix->show();

//--------------------------------------------//


class hyper{
   public static $name = "Tanvirul Nishat";

   public static function show(){
       echo self::$name;
   }
}

echo hyper::$name;

//--------------------------------------------//

class hydra{
    public static $name="mahmudul Hasan";

    public static function show(){
        echo self::$name;
    }
}
echo hydra::$name;

//--------------------------------------------//

class dark{
    public static $name= " Tanvirul HQ NIshat";

    public static function show(){
        echo self::$name;
    }

    public function __construct($n){
        self::$name= $n;
    }
 
}

$total= new dark("nishat");
$total->show();
?>