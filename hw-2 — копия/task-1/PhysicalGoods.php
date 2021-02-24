<?php
namespace task1\PhysicalGoods;

include_once "Goods.php";
use task1\Goods as Goods;

class PhysicalGoods extends Goods\Goods{
    private $price; //цена за штуку

    function __construct($name,$count,$price){
        parent::__construct($name,$count);
        $this->price = $price;
    }

    function getPrice(){
        return $this->price;
    }

    function revenue(){
        return $this->price*$this->getCount();
    }

}

