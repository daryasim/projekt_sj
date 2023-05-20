<?php
session_start();

if(!isset($_SESSION['admin_name'])){
	header("location: no-permission.php");
}
include '../includes/connection.php';
include_once 'header.php';
require_once 'functions.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $role = $_POST['role'];
    $photo = $_FILES['photo'];
    
    $imagefilename=$photo['name'];
    $imagefileerror=$photo['error'];
    $imagefiletemp=$photo['tmp_name'];

    $filename_separate=explode('.',$imagefilename);
    $file_extension=strtolower(end($filename_separate));

    $extension=array('jpeg', 'jpg', 'png');
    if(in_array($file_extension, $extension)){
        $upload_image='../images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into speakers (name,role,photo) values('$name','$role','$upload_image')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo '<script>alert("Added successfully!"); window.location.href = "speakers.php";</script>';;
        }

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
    <style>
		body {
			background-image: url('../images/intro-bg.jpg');
		}
        img{
            width:200px;
        }

	</style>

  <body>
    <div class="container">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">
        Add new
      </button>
      <div class="row">
        <table class="table table-dark" style="background-color: beige;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Role</th>
              <th scope="col">Photo</th>
              <th scope="col">Options</th>
            </tr>
          </thead>
          <tbody>
             <?php
           $sql = "Select * from speakers";
            $result = mysqli_query($conn, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $role = $row['role'];
                $photo = $row['photo'];
                echo '<tr>
            <th>' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $role . '</td>
            <td><img src=' . $photo. ' ./></td>
            <td>
            <button class="btn btn-secondary"><a href="updatesp.php?updatesp=' . $id . '" class="text-dark">Update</a></button>
            <button class="btn btn-danger"><a href="delr.php?deletesp=' . $id . '"class="text-dark">Delete</a></button>
            </td>
          </tr>';
              }
            } 

            ?>
          </tbody>
        </table>




      </div>
      <!-- Modal -->
      <form method="post" enctype="multipart/form-data">
                <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">New line</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
   <!--                          <div class="modal-body">
                                <div class="form-group">
                                    <label for="completename" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <label for="completename" class="form-label">Role</label>
                                    <input type="text" class="form-control" name="role" placeholder="role">
                                </div>
                                <div class="form-group">
                                    <label for="completemail" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" placeholder="photo" accept=".jpg, .jpeg, .png" value="">
                                </div>
                            </div> -->
                            <?php inputFields("name","name","","text");?>
                            <?php inputFields("role","role","","text");?>
                            <?php inputFields("","photo","","file");?>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>


















  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
  </body>

  </html>