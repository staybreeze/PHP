<?php

include_once "./db.php";

// $sql="delete from `users` where `id`='{$_GET['id']}'";


// $pdo->exec($sql);

$Good->del($_GET['id']);



header("location:../cart.php");