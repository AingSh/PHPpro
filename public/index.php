<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';


use Hillel\Models\User;


$orders = \Hillel\Models\Order::all();


foreach ($orders as $order) {
    echo $order->price;

}
