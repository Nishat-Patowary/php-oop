<?php 

class car{
    public $color;
    public $manufactures;

    const my_constant=[];

    public function __construct($color,$manufactures)
    {

        $this->color = $color;
        $this->manufactures = $manufactures;

    }
}

$mycar= new car($color="red",$manufactures="farari");
var_dump($mycar);

//-------------------------------------------------------//

class bike{
    public $color;
    public $manufactures;

    const my_constant=[];

    public function __construct($color,$manufactures)
    {
        $this->color = $color;
        $this->manufactures = $manufactures;
    }
}

$mix=new bike($color= "red",$manufactures= "lamborgini");
var_dump($mix);

//-------------------------------------------------------//

class cars{
    public $color;
    public $manufactures;

    const manufacture_bmw= "bmw";
    const manufacture_lambo = "lambo";
    const manufacture_farari = "farari";

    const color_red = "red";
    const color_green = "green";
    const color_yellow = "yellow";


    public function __construct($color,$manufactures)
    {
        $this->color = $color;
        $this->manufactures = $manufactures;
    }
}

$mycars= new cars(color:cars::color_red,manufactures:
cars::manufacture_bmw);
$mycars1=new cars(color:cars::color_red,manufactures:cars::manufacture_lambo);

var_dump($mycars);

//-------------------------------------------------------//


class carss{

    public $color;
    public $manufactures;

    const manufacture_lambo = "lambo";
    const manufacture_farari = "farari";
    const manufacture_bmw = "bmw";

    const color_red = "red";
    const color_green = "green";
    const color_pink = "pink";

    public function __construct($color,$manufactures)
    {
        $this->color = $color;
        $this->manufactures = $manufactures;
    }
}

$my_car= new carss(color:carss::color_pink,manufactures:cars::manufacture_lambo);
var_dump($my_car);
?>