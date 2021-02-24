<?php

include "Trait.php";

class SomeClass{
    private function __construct(){}
    use getInstance;

    private function __clone(){}
    private function __wakeup(){}
}

