<?php

use friend as GlobalFriend;
use two\lion;

class friend{
    public $closs="developer";
    private $shanto;
    private $shihab;

    public function setname($closs1,$closs2){
        $this->shanto = $closs1;
        $this->shihab =$closs2;
    }
    public function __sleep()
    {
        return array("shanto","shihab");
    }
}

$mix= new friend();
$mix->setname("Tanvirul","Nishat");
$mixer= serialize($mix);
echo $mixer;

//-----------------------------------------------------------------------------------//


class animal{
    public $lion="The lion is a king of a forest";
    private $tiger;
    private $fox;

    public function allanimal($tigers,$foxs){
        $this->tiger = $tigers;
        $this->fox = $foxs;
    }
    public function __sleep()
    {
        return array("tiger","fox");
    }
}

$mixed= new animal();
$mixed->allanimal("first","second");

$mixeds= serialize($mixed);
echo $mixeds;

//-----------------------------------------------------------------------------------//

class myfriend{
    public $closs="my closs friends";
    private $best;
    private $freely;

    public function allfriend($bestfriend,$freelyfriend){
        $this->best = $bestfriend;
        $this->freely = $freelyfriend;
    }

    public function __sleep()
    {
        return array("closs","best");
    }
}

$cal=new myfriend();
$cal->allfriend("shanto","bishal");

$calculate= serialize($cal);
echo $calculate;
?>