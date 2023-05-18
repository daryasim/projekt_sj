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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">



</head>
<?php
if(!empty($_SESSION['user'])):
?>
<?php
include 'header.php';
?>
<body>















<?php else:
echo '<h2>Ste hacker???</h2>';
echo '<a href="../index.php">Main page</a>';
?>         
<?php endif 
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>