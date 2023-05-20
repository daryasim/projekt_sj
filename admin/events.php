<?php
session_start();

if (!isset($_SESSION['admin_name'])) {
    header("location: no-permission.php");
}
include '../includes/connection.php';
include_once 'header.php';
require_once 'functions.php';

//1st day//

if (isset($_POST['submit'])) {
    $time = $_POST['time'];
    $room = $_POST['room'];
    $title = $_POST['title'];
    $byname = $_POST['byname'];
    $description = $_POST['description'];
    $picture = $_FILES['picture'];

    $imagefilename = $picture['name'];
    $imagefileerror = $picture['error'];
    $imagefiletemp = $picture['tmp_name'];

    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = '../images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "insert into firstday (time,room,title,byname,description,picture) values('$time','$room','$title','$byname','$description','$upload_image')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Added successfully!"); window.location.href = "events.php";</script>';;
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

        img {
            width: 200px;
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
                        <th scope="col">Time</th>
                        <th scope="col">Room</th>
                        <th scope="col">Title</th>
                        <th scope="col">By</th>
                        <th scope="col">Description</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from firstday";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $time = $row['time'];
                            $room = $row['room'];
                            $title = $row['title'];
                            $byname = $row['byname'];
                            $description = $row['description'];
                            $picture = $row['picture'];
                            echo '<tr>
            <th>' . $id . '</th>
            <td>' . $time . '</td>
            <td>' . $room . '</td>
            <td>' . $title . '</td>
            <td>' . $byname . '</td>
            <td>' . $description . '</td>
            <td><img src=' . $picture . ' ./></td>
            <td>
            <button class="btn-success"><a href="updatevents.php?update1=' . $id . '" class="text-dark">Update</a></button>
            <button class="btn-danger"><a href="delr.php?delete1=' . $id . '"class="text-dark">Delete</a></button>
            </td>
          </tr>';
                        }
                    }

                    ?>
                </tbody>
            </table>




    <div>
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
                        <?php inputFields("time", "time", "", "text"); ?>
                        <?php inputFields("room", "room", "", "text"); ?>
                        <?php inputFields("title", "title", "", "text"); ?>
                        <?php inputFields("byname", "byname", "", "text"); ?>
                        <?php inputFields("description", "description", "", "text"); ?>
                        <?php inputFields("", "picture", "", "file"); ?>
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