<?php 

class student{
    private static function  hello(){
 
        echo "This is a static hello function";
    }


    public static function __callStatic($name, $arguments)
    {
        echo "This is a callstatic function<br>";
    }
}

student::hello();

//----------------------------------------------------------------------------------//

class animal{
    private static function lion(){
        echo "The lion is a king<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);

        }else{
            echo "method doesnot exists";
        }
    }
}

animal::lion();

//----------------------------------------------------------------------------------//

class animals{
    private static function tiger(){
        echo "The tiger is so strong<br>";
    }

    public static function __callStatic($name, $arguments)
    {
   
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);

        }else{
            echo "method does not exists";
        }
    }
}
animals::tiger();

//----------------------------------------------------------------------------------//

class friend{
    private static function first($second){

        echo $second;
    }

    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);

        }else{
            echo "The method does not exists";
        }

    }
}

friend::first("This is my home<br>");

//----------------------------------------------------------------------------------//


class closs{
    private static function shanto($shihab){
        echo $shihab;
    }

    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);

        }else{
            echo "method does not exists";
        }

    }
}

closs::shanto("This is my wife");
?>