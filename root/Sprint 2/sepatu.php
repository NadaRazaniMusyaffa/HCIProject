<?php 
session_start();
$_SESSION["category"] = "Sepatu";
$_SESSION["database"] = 'sepatu';
header("Location: category.php");
 ?>
