<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$user=$_POST["user"];
	$password=$_POST["password"];

	$server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bis";

$conn=new mysqli($server,$db_user,$db_password,$db_name);

$select="SELECT * FROM employee where username='$user' && password='$password'";
$result=$conn->query($select);
$num_row=$result->num_rows;

$row=$result->fetch_assoc();
@$username=$row["username"];

}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="username" name="user" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
							<?php
							if($_SERVER["REQUEST_METHOD"]=="POST"){
								if($num_row==1 && $row["pr"]==1){
									header("location:dashboard_z.php");
								}
								else if($num_row==1 && $row["pr"]==2){
									echo ("<div class='alert alert-warning'> Welcome $username you are admin but not allowed enter dashboard.</div>");
								}
								else if($num_row==1 && $row["pr"]==3){
									echo ("<div class='alert alert-warning'> Welcome $username you are super visor but not allowed enter dashboard.</div>");
								}
								else{
									echo("<div class='alert alert-danger'>Enter valid data.</div><br>");
								}
							}
							// if($num_row>0){
							// 	header("location:dashboard_z.php");
							// }else{
							// 	echo ("<div class='alert alert-danger'>enter valid data</div><br>");
							// }
							?>
	
							<input type="submit" class="btn btn-primary" value="login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
