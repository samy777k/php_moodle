<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST["question_name"];
    $op1=$_POST["o1"];
    $op2=$_POST["o2"];
    $op3=$_POST["o3"];
    $answer=$_POST["answer"];
    $mark=$_POST["num_mark"];
    $course=$_POST["course"];

$query="UPDATE questions SET questionName = '$name' , option1 = '$op1', option2 = '$op2' , option3 = '$op3'
 , answer = '$answer' , mark = '$mark' , course_id = '$course' WHERE id2=".$_GET['id']."";
$result=mysqli_query($connection,$query);
if($result){
    header("Location: showQuize.php");
}

}
?>