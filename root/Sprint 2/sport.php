<?php 
session_start();
$_SESSION["category"] = "Sport";
header("Location: category.php");
 ?>