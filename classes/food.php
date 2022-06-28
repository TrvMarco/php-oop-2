<?php
    require_once __DIR__ . '/product.php';
    
    class Food extends Product{
        public $type;
        public $espire_date;

        public function __construct($_name, $_price,$_animal_type, $_quantity,$_type, $_espire_date)
        {
            parent::__construct($_name, $_price, $_animal_type, $_quantity);
            $this->type = $_type;
            $this->espire_date = $_espire_date;
        }
    }

