<?php

class Product{
    private $name;
    private $price;
    private $description;

    function __construct($name,$price,$description){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }

    function show(){
        echo $this->name." стоит ".$this->price.". Описание: ".$this->description."<br>";
    }
}

// $car = new Product('Машина',200,'ляляля');
// $car->show();
