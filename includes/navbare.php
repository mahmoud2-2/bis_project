<?php
	$server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bis";

$conn=new mysqli($server,$db_user,$db_password,$db_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Wilfa</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- project css file -->
<link rel="stylesheet" href="css/project22.css">


</head>
<body>
    <div  class="navbar">
        <img src="imges/logo2.jpg" alt="">
        <b class="main"><b>WILFA</b></b>
        <ul>
            <li><a href=""><b>Home</b></a></li>
            <li><a href="shop.php"><b>Shop</b></a>
            <li><a href="#bicycle"><b>Products</b></a></li>
                <!-- <ul >
                    <li><a href="">Products</a></li>
					<li><a href="">Product Details</a></li> 
                </ul> -->
            </li>
            <li><a href="#about"><b>About</b></a></li>
            
            
            <!-- <li>
                <a href="">Product</a>
                <ul class="dropdown">
                    <li><a href="#bicycle">Bicycles</a></li>
                    <li><a href="#eccessories">Eccessories & Clothes</a></li>
                </ul>
            </li> -->

            <!-- <li><a href="#down"><b>Contact</b></a></li> -->
        </ul>
    </div>