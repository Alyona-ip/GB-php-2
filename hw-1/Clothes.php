<?php
include "Product.php";

class Clothes extends Product{
    private $color;
    private $size;

    function __construct($name,$price,$description,$color,$size){
        parent::__construct($name,$price,$description);
        $this->color = $color;
        $this->size = $size;
    }

    function show(){
        echo $this->getName()." стоит ".$this->getPrice()."<br>Описание: ".$this->getDescription()."<br> Цвет: ".$this->color."<br> Размер: ".$this->size;
    }
}

$dress = new Clothes('Платье',100,'Красивое длинное платье','Белый','S');
$dress->show();