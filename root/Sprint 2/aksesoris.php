<?php 
session_start();
$_SESSION["category"] = "Aksesoris";
$_SESSION["database"] = 'aksesoris';
header("Location: category.php");
 ?>
