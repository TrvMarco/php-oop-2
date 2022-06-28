<?php

require_once __DIR__ . '/product.php';

class Toy extends Product{
    public $type;
    public $size;

    public function __construct($_name,$_price, $_quantity,$_animal_type, $_type, $_size)
    {
       parent::__construct($_name,$_price, $_quantity,$_animal_type) ;
       $this->type = $_type;
       $this->size = $_size;
    }
}

