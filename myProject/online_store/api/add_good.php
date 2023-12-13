<?php
include_once "./db.php";

$good = $Good->find($_sess['id']);
$user = $User->find($_SESSION['user']['id']);

$customer = [
    'id' => $user['id'],
    'customer_id' => $user['acc'],
    'product_id' => $good['id'],
    'quantity' => '1'
];

$customer = $Customer->save($customer);
echo $customer['id'];  // 或者 echo $customer['customer_id'];
