<?php
namespace Shop {
    abstract class Product
    {
        public $category;
        public $brand;
        public $price;
        public $discount;

        public function getPrice()
        {

            return $this->price;
        }

        public function getProp()
        {
            return "";
        }
    }
}