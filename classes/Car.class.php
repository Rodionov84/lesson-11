<?php
namespace Shop {

    class Car extends \Shop\Product
    {
        public $bodyType;
        public $year_of_manufacture;

        public function slogan()
        {
            echo $this->brand;
            echo " is a Good Choice" . '<br>';
        }

        public function getProp()
        {
            return "<li>Тип кузова: " . $this->bodyType . "</li><li>Год выпуска: " . $this->year_of_manufacture . "</li>";
        }
    }
}