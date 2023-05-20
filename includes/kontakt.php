<?php

include 'connection.php';



        $name = $_POST["name"];
        $email = $_POST["email"];  
        $message = $_POST["message"];  
        
 

        $insert = "insert into form(name,email,message)values('$name','$email','$message')";

        $query= mysqli_query($conn,$insert);

        if($query){
         echo '<script>alert("Thanks for your message!"); window.location.href = "../index.php";</script>';
   
 }
?>