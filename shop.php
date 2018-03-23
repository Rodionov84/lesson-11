<?php

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
            if (get_parent_class($item) != "Product") {
                return false;
            }

            $this->items[$this->count] = &$item;
            $this->quantity[$this->count] = $count;

            return $this->count++;
        }
    }

    class PurchaseOrder extends Basket
    {
        public function orderInfo()
        {
            $html = "<table>
                            <thead>
                                <tr><th>#</th>
                                <th>Название</th>
                                <th>Характеристики</th>
                                <th>Цена, ед</th>
                                <th>Кол-во</th>
                                <th>Сумма</th>
                                </tr>
                            </thead>
                        <tbody>";

            foreach ($this->items as $index => $item) {
                $html .= "<tr><td>$index</td>
                              <td>$item->brand</td>
                              <td><ul>" . $item->getProp() . "</ul></td>
                              <td>" . $item->getPrice() . "</td>
                              <td>" . $this->quantity[$index] . "</td>
                              <td>" . ($item->getPrice() * $this->quantity[$index]) . "</td></tr>";
            }

            $html .= "</tbody><tfoot><th colspan='5'></th><th>" . $this->sum() . "</th></tr></tfoot></table>";
            return $html;
        }
    }