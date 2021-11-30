<?php 
session_start();
$_SESSION["category"] = "Tas";
$_SESSION["database"] = 'tas';
header("Location: category.php");
 ?>
