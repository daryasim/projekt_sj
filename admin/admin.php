<?php
session_start();
include '../includes/connection.php';



if(isset($_POST['admin_login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $checkadmin=mysqli_query($conn, "select * from users where user='$user' and pass='$pass'" );
    $num = mysqli_num_rows($checkadmin);
    if($num >=1){
        $data = mysqli_fetch_array($checkadmin);
        $admin_name = $data['admin_name'];
        $_SESSION['admin_name']=$admin_name;
        echo '<script>alert("Welcome, Admin!"); window.location.href = "adminpage.php";</script>';;
    }else{
        echo '<script>alert("Wrong username or password!"); window.location.href = "../login.php";</script>';;

    }


}


?>