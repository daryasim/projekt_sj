<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: no-permission.php");

}
    include '../includes/connection.php';
    $id = $_GET['updateid'];
    if (isset($_POST['submit'])) {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        $sql = "UPDATE `register` SET `firstname` = '$firstname',`lastname` = '$lastname' ,`phone` = '$phone', `email` = '$email'  WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Updated successfully!"); window.location.href = "registered.php";</script>';
        }
    }
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

    <body>
        <div class="container">

            <!-- Modal -->
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lastname">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email">
                    <button type="submit" class="btn btn-primary"name="submit">Update</button>
                </div>
            </form>


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    </body>

    </html>