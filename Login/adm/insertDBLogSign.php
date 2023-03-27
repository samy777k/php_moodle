<?php
include_once('../../connect/connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];


$query="INSERT INTO logina(name,email,password) VALUE ('$name' , '$email' , '$pass')";
$result=mysqli_query($connection,$query);
if($result){
    header("location: index.php");
}
}
?>