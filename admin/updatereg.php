<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: no-permission.php");

}
    include '../includes/connection.php';
    $id = $_GET['updatecon'];
    $sql=mysqli_query($conn, "select * from form where id=$id");
    $data=mysqli_fetch_array($sql);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "UPDATE `form` SET `name` = '$name', `email` = '$email', `message` = '$message'  WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Updated successfully!"); window.location.href = "contacted.php";</script>';
            
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
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $data ['name'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"value="<?php echo $data ['email'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="message" value="<?php echo $data ['message'] ?>">
                    <button type="submit" class="btn btn-primary"name="submit">Update</button>
                </div>
            </form>


        </div>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    </body>
    </html>