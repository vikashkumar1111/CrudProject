<?php
include('db_student.php');
$id=$_GET['RollNumber'];
$del = "DELETE FROM `STUDENT` WHERE `RollNumber`='$id'";

mysqli_query($conn,$del);
header('location:display_student.php');

?>