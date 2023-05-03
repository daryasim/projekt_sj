




<?php

include 'connection.php';



 if(isset($_POST['submit'])){

    if(empty($_POST["name"])){
        echo "Name is required <br />";
    }
    if(empty($_POST["email"])){
        echo "Email is required <br />";
    }
    if(empty($_POST["message"])){
        echo "Message is required <br />";
    } else{
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];  
 

        $insert = "insert into form(name,email,message)values('$name','$email','$message')";

        $query= mysqli_query($conn,$insert);

        if($query){
        header("Location: ../index.php");
   
 }
 }
 }
?>