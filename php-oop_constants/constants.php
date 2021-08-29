<?php 

echo "Line number : " . __LINE__. "<br>";
echo "Line number :" . __LINE__ . "<br>";
echo "Line number :" . __LINE__. "<br>";

//used to show line number//


echo "file location is :" . __FILE__ . "<br>";
echo "file location is :" . __FILE__ . "<br>";

//used to show file location //


echo "FIle folder is :" . __DIR__ . "<br>";
echo "File folder is :" . __DIR__. "<br>";
echo "File folder is :" . __DIR__. "<br>";

//used to show file folder location  //

function nishat(){
    echo "function name is:  " . __FUNCTION__ . "<br>";

}
nishat();

function niloy(){
    echo "function name is  :" . __FUNCTION__. "<br>";

}
niloy();

// used to show function name  //


class myname{
    public function nishat(){
        return __CLASS__;
    }
}

$mix = new myname();
echo $mix->nishat();


class myhome{
    public function niloy(){
        return __CLASS__;
    }
}
$mixer= new myhome();
echo $mixer->niloy();

//used to show class name  //


class zoo{
    public function cat(){
        return __METHOD__;
    }
}

$mixed= new zoo();
echo $mixed->cat();

class lion{
    public function tiger(){
        return __METHOD__;
    }
}

$mixers= new lion();
echo $mixers->tiger();

// use to show method name  //



trait mytrait{
    public function gettrait(){
        return __TRAIT__;
    }
}


class myclass{
    use mytrait;
}

$mixx= new myclass();
echo $mixx->gettrait();


?>