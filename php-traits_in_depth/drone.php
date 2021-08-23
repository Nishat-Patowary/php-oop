<?php 

class drone{


    private $cameraresulation;
    private $maxflyspeed=0;
    private $maxplayingtime;


    public function __construct($maxspeed,$maxwalkingtime,$cameraresulation)
    {
        $this->maxflyspeed = $maxspeed;
        $this->maxwalkingtime =$maxwalkingtime;
        $this->cameraresulation =$cameraresulation;
    }

    public function cameraresulation(){
        return $this->cameraresulation();
    }

    public function setmaxspeed($cameraresulation): void{
    $this->cameraresulation = $cameraresulation;
    }


    public function getflyingspeed(){
        return $this->maxflyspeed;
    }

    public function setflyingspeed($maxflyspeed) : void{
        $this->maxflyspeed = $maxflyspeed;
    }

    public function getplayingtime(){
        return $this->maxplayingtime;
    }

    public function setmaxplayingtime($maxplayingtime) : void{
        $this->maxplayigtime= $maxplayingtime;
    }
}

//-------------------------------------------------------------//
//-------------------------------------------------------------//
//-------------------------------------------------------------//
//-------------------------------------------------------------//
//-------------------------------------------------------------//
//-------------------------------------------------------------//

?>