<?php

abstract class Goods{
    private $name;
    private $count;
    
    function __construct($name,$count){
        $this->name = $name;
        $this->count = $count;
    }

    function getCount(){
        return $this->count;
    }

    function getName(){
        return $this->name;
    }

    abstract function getPrice();
    abstract function revenue();

}