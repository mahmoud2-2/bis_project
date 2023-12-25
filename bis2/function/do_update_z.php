<?php

	$server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bis";

$conn=new mysqli($server,$db_user,$db_password,$db_name);

	// echo"<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // echo"</pre>";
	// exit();

$id=$_GET["id"];

$name=$_POST["name"];
$count=$_POST["count"];
// $img=$_POST["img"];
$price=$_POST["price"];
$category=$_POST["category"];
$dsc=$_POST["dsc"];

if($_FILES["img"]["error"]==0){
$img_name=$_FILES["img"]["name"];
$img_tmp=$_FILES["img"]["tmp_name"];
$img_size=$_FILES["img"]["size"];

$img_arr=explode(".",$img_name);
$img_ex=end($img_arr);

$extence=["jpg","png","gif","jpeg"];
if(!in_array($img_ex,$extence)){
	echo "error";
}
if($img_size>3000000){
	echo "file is too larg";
	
}

$new_name=time().rand(1,1000).$img_name;

move_uploaded_file($img_tmp,"../img/$new_name");

// $update="UPDATE products SET name='$name',count='$count',img='$new_name',price=$price,category=$category,dsc=$dsc where id='$id'";
$update="UPDATE products SET name='$name',count= $count,img='$new_name',price=$price,category=$category,dsc='$dsc' WHERE id='$id'";
}
else{
	$update="UPDATE products SET name='$name',count=$count,price=$price,category=$category,dsc='$dsc' where id='$id'";
}	
$conn->query($update);

header("location:../products_z.php");

?>