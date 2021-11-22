<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "proyekhci");

if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="DELETE FROM data WHERE id=$id;";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('location:category.php');
	}
	else{
		die(mysqli_error($conn));
	}
}
//button: <a href="hapus.php?deleteid='.$id.'>