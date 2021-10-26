<?php
    class Product {
        public $name;
        public $description;
        public $brand;
        public $price;
        public $category;


        function __construct($_name, $_description, $_brand, $_price, $_category)
        {
            $this->name = $_name;
            $this->description = $_description;
            $this->brand = $_brand;
            $this->price = $_price;
            $this->category = $_category;
        }
    }
?>