<?php
session_start();

if(!isset($_SESSION['admin_name'])){
	header("location: no-permission.php");
}
include '../includes/connection.php';
include 'header.php';
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
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">
        Add new
      </button>
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
            $result = mysqli_query($conn, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $phone = $row['phone'];
                $email = $row['email'];
                echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $firstname . '</td>
            <td>' . $lastname . '</td>
            <td>' . $phone . '</td>
            <td>' . $email . '</td>
            <td>
            <button class="btn-success"><a href="updater.php?updateid=' . $id . '" class="text-dark">Update</a></button>
            <button class="btn-danger"><a href="delr.php?deleteid=' . $id . '"class="text-dark">Delete</a></button>
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
                                    <label for="completename" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="completename" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="completemail" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control"  name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="completemessage" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email">
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
    </div>


















  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
  </body>

  </html>