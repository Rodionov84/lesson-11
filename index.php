<?php
include("autoloader.php");

autoloader("Product");
autoloader("Car");
autoloader("Pen");
autoloader("Tv");
autoloader("Basket");
autoloader("PurchaseOrder");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>3.3</title>
</head>

<body>
<?php

$order = new \Shop\PurchaseOrder();

$audi = new \Shop\Car();
$audi->brand = 'Porsche Cayenne';
$audi->price = 40000;
$audi->bodyType = 'SUV';
$audi->year_of_manufacture = 2017;

$bmw = new \Shop\Car();
$bmw->brand = 'BMW 3';
$bmw->price = 25000;
$bmw->bodyType = 'Coupe';
$bmw->year_of_manufacture = 2018;

$sony = new \Shop\Tv();
$sony->brand = 'Sony KDL-32RE';
$sony->price = 500;
$sony->diagonal = 42;
$sony->maximum_resolution = '4k';

$parker = new \Shop\Pen();
$parker->brand = 'Parker Urban';
$parker->price = '40';
$parker->color = 'blue';
$parker->discount = '15';

//$parker->discount();

try {
    $order->add($audi, 2);
    $order->add($bmw);
    $order->add($sony, 3);
    $order->add($parker);
} catch (Exception $exception)
{
    echo "Неправильный товар.";
}

//$order->remove(2);

//echo $order->sum();
echo $order->orderInfo();

?>
</body>
</html>
