<?php
session_start();
if(!isset($_SESSION['admin_name'])){
	header("location: no-permission.php");
}
include '../includes/connection.php';
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Admin Panel</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">



</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h1 class="wow fadeInUp" data-wow-delay="1.6s" style="text-align: center;">Welcome, Admin <?php echo $_SESSION['admin_name'] ?></h1>
			</div>


		</div>
	</div>
</section>


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>