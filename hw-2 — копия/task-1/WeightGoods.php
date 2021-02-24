<?php
namespace task1\WeightGoods;

include_once "Goods.php";
use task1\Goods as Goods;

class WeightGoods extends Goods\Goods{
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