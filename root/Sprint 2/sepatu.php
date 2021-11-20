<?php 
session_start();
$_SESSION["category"] = "Sepatu";
header("Location: category.php");
 ?>