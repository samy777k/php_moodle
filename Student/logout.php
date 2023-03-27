<?php
session_start();
session_unset();
session_destroy();
header('Location: ../declared/index.html');
include_once('../connect/connection.php');
$query="DELETE FROM onlinet";
$result=mysqli_query($connection,$query);
?>