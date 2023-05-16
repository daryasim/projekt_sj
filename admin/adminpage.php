<?php
session_start();

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

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
  <?php
  include_once "../header.php";
  ?>
    <div style="text-align: center;">
      <?php if(!empty($_SESSION['user'])) :
      ?>
      <a href = "../logout.php">Log out</a>
      <?php else:
      echo '<h2>Ste hacker???</h2>';
      echo '<a href="../index.php">Main page</a>';
      
      ?>

    </div>

<?php endif 
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<?php
include_once "../footer.php";
?>
</body>
</html>