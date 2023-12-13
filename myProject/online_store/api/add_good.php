<?php
include_once "./db.php";

$good = $Good->find($_GET['id']);




$customerResult = $Customer->save([
    'customer_id' => $_SESSION['user'],
    'product_id' => $good['id'],
    'quantity' => 1
]);




echo "<pre>";
print_r($customerResult);
echo "</pre>";

header("location:../index.php#store");