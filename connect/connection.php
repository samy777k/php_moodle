<?php
$connection=mysqli_connect('localhost','root','','moodle_project');
if(!$connection){
    die("error " .mysqli_connect_error());
}

?>