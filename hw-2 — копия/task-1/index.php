<?php

include_once "PhysicalGoods.php";
include_once "DigitalGoods.php";
include_once "WeightGoods.php";

use task1\PhysicalGoods as PhysicalGoods;
use task1\DigitalGoods as DigitalGoods;
use task1\WeightGoods as WeightGoods;

$book = new PhysicalGoods\PhysicalGoods('Книга',2,1200);
echo "Товар: ".$book->getName()."<br>";
echo "Цена за штуку: ".$book->getPrice()."<br>";
echo "Кол-во: ".$book->getCount()."<br>";
echo "Доход: ".$book->revenue()."<hr>";

$book2 = new DigitalGoods\DigitalGoods('Книга-2',2,1200);
echo "Товар: ".$book2->getName()."<br>";
echo "Цена за штуку: ".$book2->getPrice()."<br>";
echo "Кол-во: ".$book2->getCount()."<br>";
echo "Доход: ".$book2->revenue()."<hr>";

$nuts = new WeightGoods\WeightGoods('Орехи',2,800);
echo "Товар: ".$nuts->getName()."<br>";
echo "Цена за кг: ".$nuts->getPrice()."<br>";
echo "Вес в кг: ".$nuts->getCount()."<br>";
echo "Доход: ".$nuts->revenue()."<hr>";