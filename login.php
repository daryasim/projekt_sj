

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/style1.css">

</head>

<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form class="group" action="admin/admin.php" method="POST">
  <div class="form-field">
    <input type="username" placeholder="Username" name="user" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name = "pass" required/>                         </div>
   
  <div class="form-field">
    <button class="btn" type="submit" name="admin_login">Log in</button>
  </div>
  <div class="form-field" >
    <button onclick="location.href='index.php'" type="button" class="btn">Main Page</button>
  </div>
</form>


</div>

<!-- partial -->
  
</body>
</html>
