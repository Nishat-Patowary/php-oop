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

//--------------------------------------------------------------------//


class  third{
    private $appartment= ["name"=>"bosundhora","sector"=> "second","price"=> "10 lakh"];

    public function __get($customer){
        if(array_key_exists($customer,$this->appartment)){
            return $this->appartment[$customer];
        }else{
            return "The key($customer) is not define";
        }
    }
}

$apprt= new third();
echo $apprt->nishat;

//--------------------------------------------------------------------//

class five{

    private $teacher= ["name"=>"nazmul","place"=>"ak school","salary"=>"ten hazar"];

    public function __get($post){
        if(array_key_exists($post,$this->teacher)){
            return $this->teacher[$post];
        }else{
            return "the key ($post) is not define";
        }
    }
}

$mic= new third;
echo $mic->new;

//--------------------------------------------------------------------//

?>