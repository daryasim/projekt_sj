<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: no-permission.php");

}
    include '../includes/connection.php';
    $id = $_GET['updatesp'];
    $sql=mysqli_query($conn, "select * from speakers where id=$id");
    $data=mysqli_fetch_array($sql);
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $photo = $_FILES['photo'];
        
        $imagefileloc=$_FILES['photo']['tmp_name'];
        $imagefilename=$_FILES['photo']['name'];
        $upload_image='../images/'.$imagefilename;
        move_uploaded_file($imagefileloc,'../images/'.$imagefilename);
            $sql="update speakers set name = '$name', role = '$role', photo = '$upload_image'  WHERE id = '$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo '<script>alert("Updated successfully!"); window.location.href = "speakers.php";</script>';;
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
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $data ['name'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="role"value="<?php echo $data ['role'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Photo</label>
                    <td><input type="file" class="form-control" id="exampleInputEmail1" name="photo" value="<?php echo $data ['photo'] ?>" ><img src="<?php echo $data ['photo'] ?>" width="200px" height="200px"></td>
                    <input type="hidden" name='id' value="<?php echo $data ['id'] ?>">
                    <button type="submit" class="btn btn-primary"name="submit">Update</button>
                </div>
            </form>


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    </body>
    </html>