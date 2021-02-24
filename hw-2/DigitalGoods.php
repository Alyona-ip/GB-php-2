<?php

include "PhysicalGoods.php";

class GigitalGoods extends PhysicalGoods{
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

// $book = new GigitalGoods('Книга',2,1200);
// echo $book->getPrice()."<br>";
// echo $book->revenue()."<br>";