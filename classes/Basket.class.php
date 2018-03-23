<?php
namespace Shop
{

    class Basket
    {
        protected $items = array();
        protected $quantity = array();
        protected $count = 1;

        public function sum()
        {
            $sum = 0;
            foreach ($this->items as $index => $item) {
                //echo "Price: " . $item->getPrice() . " / Count: " . $this->quantity[ $index ] . "<br>";
                $sum += $item->getPrice() * $this->quantity[$index];
            }
            return $sum;
        }

        public function productsCount()
        {
            return count($this->items);
        }

        public function remove($index)
        {
            if (isset($this->items[$index])) {
                unset($this->items[$index]);
                unset($this->quantity[$index]);

                return true;
            }
            return false;
        }

        public function add(&$item, $count = 1)
        {
            if (get_parent_class($item) != "Shop\Product") {
                throw new \Exception("Incorrect Product class!");
                return false;
            }

            $this->items[$this->count] = &$item;
            $this->quantity[$this->count] = $count;

            return $this->count++;
        }
    }

}
