<?php
session_start();
if(!empty($_SESSION['user'])):
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
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
      <th scope="col">Options</th>
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
            <button class="btn-success"><a href="updatereg.php?updateid='.$id.'" class="text-dark">Update</a></button>
            <button class="btn-danger"><a href="delr.php?deleteid='.$id.'"class="text-dark">Delete</a></button>
            </td>
          </tr>';
        }

    }

    ?>
  </tbody>
</table>

			


		</div>
	</div>


















<?php
else:
  echo '<h2>Ste hacker???</h2>';
  echo '<a href="../index.php">Main page</a>';
endif
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
</body>
</html>