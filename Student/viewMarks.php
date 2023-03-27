<?php
include_once('../connect/connection.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $arr=($_POST['options']);
    $mark=0;
    foreach($arr as $key=>$value){
        $query="SELECT * FROM questions WHERE id2='".$key."' and answer='".$value."'";
        $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result)){
            $mark+=$row['mark'];   
        }
        
    }

    session_start();
 
    $query2="INSERT INTO marks(courseM , finish_mark , student , allMark) VALUE ('".$_GET['id']."' , '".$mark."' , '".$_SESSION['id']."' , '".$_SESSION['mark']."')";
    $result2=mysqli_query($connection,$query2);
    if($result2){
        header('Location: showMarks.php');
    }
    
}
?>

