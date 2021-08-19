<?php 

class nishat{
  private $niloy= "This is a home";
  public function __get($pro)
  {
      echo "You are tying not existing property<br>";
  }
}

$mix= new nishat();
$mix->niloy;

//--------------------------------------------------------------------//

class first{
    private $one=["name"=>"Tanvirul","shift"=>"second","dep"=>"computer"];

    public function __get($hyper)
    {
        echo "you are trying to aceess not existing property<br>";

    }

}

$mixer= new first();
print_r($mixer->one);

//--------------------------------------------------------------------//

class second{
    private $info= ["Name"=>"Nishat","place"=>"dhaka","number"=>"Num"];

    public function __get($detail)
    {
        if(array_key_exists($detail,$this->info)){
            return $this->info[$detail];
        }else{
            return "The key($detail) is not define";
        }
    }
}

$mixed= new second();
echo $mixed->place;


?>