<?php

$server = "localhost";    
$user = "root";                            
$pass = "";                                   
$database="admin";           

$conn=mysqli_connect($server,$user,$pass,$database);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}

?>