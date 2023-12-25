<?php

	$server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bis";

$conn=new mysqli($server,$db_user,$db_password,$db_name);

$id=$_GET["num"];

$delete="DELETE FROM products WHERE id='$id'";
$conn->query($delete);

header("location:../products_z.php")






?>