<?php

class WeightGoods extends Goods{
    private $price; //цена за кг

    function __construct($name,$count,$price){
        parent::__construct($name,$count);
        $this->price = $price;
    }

    function getPrice(){
        return $this->price;
    }

    function revenue(){
        return $this->getPrice()*$this->getCount();
    }
}