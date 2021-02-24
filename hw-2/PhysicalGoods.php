<?php

include "Goods.php";

class PhysicalGoods extends Goods{
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

// $book = new PhysicalGoods('Книга',2,1200);
// echo $book->getPrice()."<br>";
// echo $book->revenue()."<br>";