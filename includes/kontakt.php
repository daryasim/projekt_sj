<?php

include 'connection.php';



        $name = $_POST["name"];
        $email = $_POST["email"];  
        $message = $_POST["message"];  
 

        $insert = "insert into form(name,email,message)values('$name','$email','$message')";

        $query= mysqli_query($conn,$insert);

        if($query){
        header("Location: ../index.php");
   
 }
?>