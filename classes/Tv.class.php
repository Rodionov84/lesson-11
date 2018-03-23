<?php
namespace Shop {

    class Tv extends \Shop\Product
    {
        public $diagonal;
        public $maximum_resolution;

        public function diagonal()
        {
            echo $this->brand;
            echo " has a diagonal ";
            echo $this->diagonal . '<br>';
        }

        public function getProp()
        {
            return "<li>Диагональ: " . $this->diagonal . "</li><li>Разрешение: " . $this->maximum_resolution . "</li>";
        }
    }
}