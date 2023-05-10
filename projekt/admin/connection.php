<?php

$server = "localhost";    
$user = "root";                            
$pass = "";                                   
$database="admin";           

$dbh = 'mysql:host='.$server.';dbname='.$database.';charset=utf8';
$pdo = new PDO($dbh,$user,$pass);
?>