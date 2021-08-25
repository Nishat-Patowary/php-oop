<?php 

trait robotrait{
    private $maxrunspeed=0;
    private $maxwalkingtime;

    public function __construct($maxspeed,$maxwalkingtime)
    {
        $this->maxrunspeed = $maxspeed;
        $this->maxwalkingtime =$maxwalkingtime;
    }

    public function getmaxspeed(){
        return $this->maxrunspeed;
    }

    public function setmaxspeed($maxrunspeed): void{
    $this->maxrunspeed = $maxrunspeed;
    }

    public function getmaxwalkingtime(){
        return $this->maxwalkingtime;
    }

    public function setmaxwalkingtime($maxwalkingtime) : void{
        $this->maxwalkingtime= $maxwalkingtime;
    }
}


class robot{
    use robotrait;
}
//--------------------------------------------------------------//

?>