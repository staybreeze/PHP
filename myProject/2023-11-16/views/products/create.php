<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=views";
$pdo = new PDO($dsn,'root','');


$product = isset($_GET['product']) ? htmlspecialchars(trim($_GET['product'])) : '';
$photoDescription = isset($_GET['photoDescription']) ? htmlspecialchars(trim($_GET['photoDescription'])) : '';
$price = isset($_GET['price']) ? htmlspecialchars(trim($_GET['price'])) : '';
$unit = isset($_GET['unit']) ? htmlspecialchars(trim($_GET['unit'])) : '';

$sql = "INSERT INTO `products`(`product`, `photoDescription`, `price`, `unit`)
        VALUES('$product','$photoDescription','$price','$unit')";

$pdo->exec($sql);

header("Location:index.html");
?>
