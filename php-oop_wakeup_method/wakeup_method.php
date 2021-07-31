<?php

use friends as GlobalFriends;

class friend{
    public $normal="The are normal friend";
    private $best;
    private $closs;

    public function rename($bfriend,$cfriend){
        $this->best = $bfriend;
        $this->closs = $cfriend;
    }

    public function __sleep()
    {
        return array("best","closs");
    }
    public function __wakeup()
    {
        echo "This is wakeup method";
    }
}

$mix= new friend();
$mix->rename("shanto","shihab");

$mixer=serialize($mix);
$us= unserialize($mixer);
print_r($us);

//-----------------------------------------------------------------------------------//

class friends{
    public $closs="the are closs to me";
    private $best;
    private $brother;

    public function allfriend($bfriend,$brfriend){

        $this->best= $bfriend;
        $this->brother =$brfriend;
    }

    public function __sleep()
    {
        return array("best","brother");
    }
    public function __wakeup()
    {
        echo "This is a wakeup method";
    }

}

$miz=new friends();
$miz->allfriend("shihab","shanto");

$mixers=serialize($miz);
$use=unserialize($mixers);
print_r($mixers);

?>