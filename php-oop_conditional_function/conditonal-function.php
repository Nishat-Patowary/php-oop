<?php 

class nishat{
    
}

if(class_exists("nishat")){
    $mix= new nishat();
    echo "The class is exists";
}else{

    echo "The class is not exists";
}
//-------------------------------------//

class niloys{

}

if(class_exists("niloy")){
    $mixer= new niloys();
    echo "The class is exists";
}else{
    echo "The class is not exists";
}

//-------------------------------------//

//----------------------class_exists end---------------------------//


interface myinterface{

}

class myclass{

}

if(interface_exists("myinterface")){
    echo "The interface is exists";
}else{
    echo "The interface is not exists";
}

//-------------------------------------//

interface ourinterface{

}

class myname{

}

if(interface_exists("ourinterface")){

    echo "The interface is exists";
}else{
    echo "The interface is not exists";
}
//--------------------interface used-------------------------------//


class  bishal{
    public function mymethod(){

    }
}

$object = new bishal();
if(method_exists($object,"mymethod")){
    echo "This method is exists";
}else{
    echo "This method is not exists";
}

//--------------------------------------------------//

class tamim{
    public function ourmethod(){

    }
}

$mixed= new tamim();
if(method_exists($mixed,"ourmethods")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}

//-----------------method_exists used-----------------------------//


trait mytrait{
    public function mymethod(){

    }
}

if(trait_exists("mytrait")){
    echo "This trait is exists";
}else{
    echo "This trait is not exists";
}


trait mytraits{
    public function mymethods(){

    }
}

if(trait_exists("mytraits")){
    echo "The trait is exists";
}else{
    echo "The trait is not exists";
}

//----------------traits_exists used---------------------------//


class myfriend{
    public $closs;
}

if(property_exists("myfriend","closs")){
    echo "This property is exist";
}else{
    echo "This property is not exist";
}

class mybrother{
    public $best;
}

if(property_exists("my-brother","best")){
    echo "this property is exist";
}else{
    echo "This property is not exist";
}

//---------------------property_exists used------------------------------//


class momin{

}

$ob= new momin();
if(is_a($ob,"momin")){
    echo "This object is of a class";
}else{
    echo "This object is not of a class";
}



class tanvir{

}

$obj= new tanvir();
if(is_a($obj,"tanvir")){
    echo "This object is of a class";
}else{
    echo "This object is not of a class";
}


class sobuj{

}

class parvez extends sobuj{

}

$obs= new sobuj();
if(is_a($obs,"sobuj")){
    echo "The object of sobuj";
}else{
    echo "The object is not sobuj";
}

//-------------------------------- is_a used  -------------------------------//


