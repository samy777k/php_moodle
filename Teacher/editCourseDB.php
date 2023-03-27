<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST["course_nameE"];
    $mark=$_POST["course_markE"];

$query="UPDATE courses SET name = '$name' , totalMarks = '$mark' WHERE id=".$_GET['id']."";
$result=mysqli_query($connection,$query);
if($result){
    header("Location: showCourse.php");
}

}
?>