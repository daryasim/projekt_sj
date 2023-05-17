<?php
include 'header.php';
include '../includes/connection.php';
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

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/owl.theme.css">
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/style.css">
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<body>
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">
        <table class="table table-dark" style="background-color: beige;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select * from register";
    $result=mysqli_query($conn,$sql);
    if($result){
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $phone=$row['phone'];
            $email=$row['email'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$firstname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>
            <button class="btn-success"><a href="">Update</a></button>
            <button class="btn-danger"><a href="">Delete</a></button>
            </td>
          </tr>';
        }

    }

    ?>
  </tbody>
</table>

			


		</div>
	</div>
</section>



















<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.parallax.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>