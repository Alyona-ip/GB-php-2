<?php

class DigitalGoods extends PhysicalGoods{
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

