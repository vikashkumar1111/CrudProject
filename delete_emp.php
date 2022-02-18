<?php
include 'db_student.php';

$id=$_GET['id'];
$del="DELETE FROM `employees` WHERE `id`='$id'";

$query=mysqli_query($conn,$del);

if($query){
    header('location:display_emp.php');
}
else{
    echo "Not deleted";
}




?>