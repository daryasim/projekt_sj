
<?php

include 'connection.php';



        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];  
 

        $insert = "insert into register(firstname,lastname,phone,email)values('$firstname','$lastname','$phone','$email')";

        $query= mysqli_query($conn,$insert);

        if($query){
              echo '<script>alert("You are now registered!"); window.location.href = "../index.php";</script>';
        
        
   
 }
?>