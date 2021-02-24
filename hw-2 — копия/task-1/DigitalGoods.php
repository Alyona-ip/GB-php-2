<?php
namespace task1\DigitalGoods;

include_once "PhysicalGoods.php";
use task1\PhysicalGoods as PhysicalGoods;

class DigitalGoods extends PhysicalGoods\PhysicalGoods{
    function __construct($name,$count,$price){
        parent::__construct($name,$count,$price);
    }

    function getPrice(){
        return parent::getPrice()/2;
    }

    function revenue(){
        return $this->getPrice()*$this->getCount();
    }
}

