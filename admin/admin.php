<?php
require_once 'connection.php';
session_start();
?> 

<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$sql = $pdo->prepare("SELECT id,user FROM users where user=:user AND pass=:pass ");
$sql->execute(array('user' =>$user,'pass'=>$pass));
$array= $sql->fetch(PDO::FETCH_ASSOC);
if($array["id"]>0){
    $_SESSION['user']=$array["id"];
    header('Location: adminpage.php');
}
else{
    header('Location: /projekt_sj/projekt/login.php');
}
?>