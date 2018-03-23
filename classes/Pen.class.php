<?php
namespace Shop {

    class Pen extends \Shop\Product
    {
        public $color;

        public function getProp()
        {
            return "<li>Цвет: " . $this->color . "</li>";
        }

        public function discount()
        {
            echo $this->brand;
            echo " with a discount costs ";
            echo ($this->getPrice() - ($this->getPrice() * $this->discount / 100)) . '<br>';
        }
    }
}