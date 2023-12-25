<?php

	$server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bis";

$conn=new mysqli($server,$db_user,$db_password,$db_name);

// echo("<pre>");
// 	print_r($_POST);
// 	print_r($_FILES);
// echo("<pre>");
// exit();

$img_name=$_FILES["img"]["name"];
$img_tmp=$_FILES["img"]["tmp_name"];
$img_size=$_FILES["img"]["size"];

$img_arr=explode(".",$img_name);
$img_ex=end($img_arr);

$extence=["jpg","png","gif","jpeg"];
if(!in_array($img_ex,$extence)){
	echo "error";
	exit();
}
if($img_size>3000000){
	echo ("file is to larg");
	?>
	<a href="../add_z.php"><button class="btn btn-danger">delete</button></a>
	<?php
	exit();
}

$new_name=time().rand(1,1000).$img_name;

move_uploaded_file($img_tmp,"../img/$new_name");




$name=$_POST["name"];
$count=$_POST["count"];
// $img=$_POST["image"];
$price=$_POST["price"];
$category=$_POST["category"];
$dsc=$_POST["dsc"];

$insert="INSERT INTO products(name, count, img, price, category, dsc) VALUES ('$name',$count,'$new_name',$price,$category,'$dsc')";
$conn->query($insert);

header("location:../products_z.php");



?>