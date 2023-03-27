<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $name=$_POST['course_name'];
    $mark=$_POST['course_mark'];

    $query="INSERT INTO courses(name,totalMarks) VALUE ('$name' , '$mark')";
    $result=mysqli_query($connection,$query);
    if($result){
        header('Location: addCourse.php');
    }
}

?>