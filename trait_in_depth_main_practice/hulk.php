<?php 


class hulk{
    public function hammer(){
        echo "the hammer is so strong<br>";
    }
}

class hulk_angry{
    public function angry_man(){
        echo "The hulk is so stronger<br>";
    }
}

class hulk_avenger{
    use hulk_cyko;
}
 
?>