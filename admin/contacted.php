<?php
session_start();
if (!empty($_SESSION['user'])) :
    include 'header.php';
    include '../includes/connection.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql="insert into form (name,email,message)
        values('$name','$email','$message')";
        $result=mysqli_query($conn,$sql);
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">
                Add new
            </button>
            <div class="row">
                <table class="table table-dark" style="background-color: beige;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from form";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $message = $row['message'];
                                echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $message . '</td>
            <td>
            <button class="btn-danger"><a href="delr.php?deletecon=' . $id . '"class="text-dark">Delete</a></button>
            </td>
          </tr>';
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>


            <!-- Modal -->
            <form method="post">
                <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">New line</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="completename" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="completename" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="completemail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="completemail" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="completemessage" class="form-label">Message</label>
                                    <input type="text" class="form-control" id="completemessage" name="message">
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
        <?php
    else :
        echo '<h2>Ste hacker???</h2>';
        echo '<a href="../index.php">Main page</a>';
    endif
        ?>
    </body>

    </html>