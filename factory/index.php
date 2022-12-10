<?php
require_once 'CarOrder.php';
$carOrder = new CarOrder;
var_dump($carOrder->getCarOrders()); //array(0) { }

require_once 'CarOrder.php';
$carOrder = new CarOrder;
$carOrder->order('r');
var_dump($carOrder->getCarOrders()); //array(1) { [0]=> string(1) "r" }
