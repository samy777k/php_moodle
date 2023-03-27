<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $id=$_GET['id'];
    $query="UPDATE logins SET nameS = '$name' , email = '$email' , password = '$pass' WHERE id = $id";
    $result=mysqli_query($connection,$query);
    if($result){
        header('Location: profile.php');
    }
}
?>