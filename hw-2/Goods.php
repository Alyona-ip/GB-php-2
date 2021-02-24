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

    abstract function getPrice();
    abstract function revenue();

}