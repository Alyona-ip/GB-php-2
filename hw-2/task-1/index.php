<?php

spl_autoload_register(function($className){
    include_once "$className.php";
});

$book = new PhysicalGoods('Книга',2,1200);
echo "Товар: ".$book->getName()."<br>";
echo "Цена за штуку: ".$book->getPrice()."<br>";
echo "Кол-во: ".$book->getCount()."<br>";
echo "Доход: ".$book->revenue()."<hr>";

$book2 = new DigitalGoods('Книга-2',2,1200);
echo "Товар: ".$book2->getName()."<br>";
echo "Цена за штуку: ".$book2->getPrice()."<br>";
echo "Кол-во: ".$book2->getCount()."<br>";
echo "Доход: ".$book2->revenue()."<hr>";

$nuts = new WeightGoods('Орехи',2,800);
echo "Товар: ".$nuts->getName()."<br>";
echo "Цена за кг: ".$nuts->getPrice()."<br>";
echo "Вес в кг: ".$nuts->getCount()."<br>";
echo "Доход: ".$nuts->revenue()."<hr>";