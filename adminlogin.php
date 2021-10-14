<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'gym');

if($con){
echo "connected";
echo "<br>";
}
else{
	echo "not connected";
}
if(isset($_POST['username'])){
	$uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from adminlogin where user='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "You Have Successfully Logged in";
        exit();
       }
    else{
        echo "You Have Entered Incorrect Password";
        exit();
    }     
}


?>


<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="css\sty1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
include 'menu.php' ;
 ?>

	<div class="container">
	<img src="images/userimg.png"/>
		<form method="POST" action="about.html">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>