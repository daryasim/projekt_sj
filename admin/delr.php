<?php
include '../includes/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from register where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("Deleted successfully!"); window.location.href = "registered.php";</script>';
    } else{
        die(mysqli_error($conn));
    }
}

if(isset($_GET['deletecon'])){
    $id=$_GET['deletecon'];

    $sql="delete from form where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("Deleted successfully!"); window.location.href = "contacted.php";</script>';
    } else{
        die(mysqli_error($conn));
    }
}

?>