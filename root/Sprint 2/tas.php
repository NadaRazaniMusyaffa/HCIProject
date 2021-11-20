<?php 
session_start();
$_SESSION["category"] = "Tas";
header("Location: category.php");
 ?>