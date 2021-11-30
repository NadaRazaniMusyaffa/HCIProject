<?php 
session_start();
$_SESSION["category"] = "Pakaian";
$_SESSION["database"] = "pakaian";
header("Location: category.php");
 ?>
