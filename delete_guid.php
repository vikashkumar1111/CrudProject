<?php
include 'db_student.php';

$id=$_GET['id'];
$del="DELETE FROM `guardian` WHERE `id`='$id'";

$query=mysqli_query($conn,$del);

if($query){
    header('location:display_guid.php');
}
else{
    echo "Not deleted";
}




?>