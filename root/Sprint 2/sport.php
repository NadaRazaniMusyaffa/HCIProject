<?php 
session_start();
$_SESSION["category"] = "Sport";
$_SESSION["database"] = 'sport';
header("Location: category.php");
 ?>
