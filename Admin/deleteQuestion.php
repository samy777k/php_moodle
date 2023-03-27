
<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $query="DELETE FROM questions WHERE id=$id";
    $result=mysqli_query($connection,$query);
}
?>