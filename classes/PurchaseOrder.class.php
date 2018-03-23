<?php
namespace Shop {

    class PurchaseOrder extends \Shop\Basket
    {
        public function orderInfo()
        {
            $html = "<table>
                            <thead>
                                <tr><th>№</th>
                                <th>Название</th>
                                <th>Характеристики</th>
                                <th>Цена, ед</th>
                                <th>Кол-во</th>
                                <th>Стоимость</th>
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
}