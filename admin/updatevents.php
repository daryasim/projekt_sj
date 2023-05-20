<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location: no-permission.php");

}
    include '../includes/connection.php';
    $id = $_GET['update1'];
    $sql=mysqli_query($conn, "select * from firstday where id=$id");
    $data=mysqli_fetch_array($sql);
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $time = $_POST['time'];
        $room = $_POST['room'];
        $title = $_POST['title'];
        $byname = $_POST['byname'];
        $description = $_POST['description'];
        $picture = $_FILES['picture'];
        
        $imagefileloc=$_FILES['picture']['tmp_name'];
        $imagefilename=$_FILES['picture']['name'];
        $upload_image='../images/'.$imagefilename;
        move_uploaded_file($imagefileloc,'../images/'.$imagefilename);
            $sql="update firstday set time = '$time', room = '$room',title = '$title',byname = '$byname', description = '$description', picture = '$upload_image'  WHERE id = '$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo '<script>alert("Updated successfully!"); window.location.href = "events.php";</script>';;
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
                    <label for="exampleInputEmail1" class="form-label">Time</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="time" value="<?php echo $data ['time'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Room</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="room"value="<?php echo $data ['room'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title"value="<?php echo $data ['title'] ?>">
                    <label for="exampleInputEmail1" class="form-label">By</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="byname"value="<?php echo $data ['byname'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="description"value="<?php echo $data ['description'] ?>">
                    <label for="exampleInputEmail1" class="form-label">Photo</label>
                    <td><input type="file" class="form-control" id="exampleInputEmail1" name="picture" value="<?php echo $data ['picture'] ?>" ><img src="<?php echo $data ['picture'] ?>" width="200px" height="200px"></td>
                    <input type="hidden" name='id' value="<?php echo $data ['id'] ?>">
                    <button type="submit" class="btn btn-primary"name="submit">Update</button>
                </div>
            </form>


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    </body>
    </html>