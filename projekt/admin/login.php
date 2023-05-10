<?php
include('connection.php');
session_start();



if(isset($_POST['submit'])){
	
	$user=mysqli_real_escape_string($con,$_POST['user']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $login_query = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
    $login_query_go = mysqli_query($con,$login_query);
	$check=mysqli_query($con,"select * from login where user='$user' and pass='$pass'");
	$check_fetch=mysqli_fetch_array($check);
	
	if($check_fetch['id']!='1'){
		$_SESSION['id']=$check_fetch['id'];
		
		
		header('location:index.php');
		}
	
	}
else{
    $_SESSION['message'] = "You are not allowed to access admin panel";
    header("Location: login.php");
    exit(0);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form class="group" action="login.php" method="POST">
  <div class="form-field">
    <input type="username" placeholder="Username" name="user" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name = "pass" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
