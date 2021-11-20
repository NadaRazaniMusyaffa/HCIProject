<?php 
session_start();
$_SESSION["category"] = "Pakaian";
header("Location: category.php");
 ?>