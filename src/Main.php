<?php

require_once("app_autoload.php");

print_r("Hello world");

$rest = new RestaurantBill('tomato');
$total = $rest->calculateTotal();

print_r($total);