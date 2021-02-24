<?php

include "Goods.php";

class WeightlGoods extends Goods{
    private $price; //цена за кг
    private $weight;

    function __construct($name,$count,$price,$weight){
        parent::__construct($name,$count);
        $this->price = $price;
        $this->weight = $weight;
    }

    function getPrice(){
        return $this->price*$this->weight;
    }

    function revenue(){
        return $this->getPrice()*$this->getCount();
    }
}

// $nuts = new WeightlGoods('Орехи',1,800,2);
// echo $nuts->getPrice()."<br>";
// echo $nuts->revenue()."<br>";