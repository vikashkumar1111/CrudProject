
<?php

include 'db_student.php';

if(isset($_POST['submit'])){

$roll= $_POST['rollnumber'];
$sname= $_POST['name'];
$sDOB= $_POST['dob'];
$guid= $_POST['guid'];



$ins="INSERT INTO `student`(`RollNumber`,`SName`,`SDateofBirth`,`GUID`) VALUES ('$roll','$sname','$sDOB','$guid')";
//echo $ins;

$query=mysqli_query($conn,$ins);
if($query){
   header('location:display_student.php');
}
else{
    echo ' Not inserted:';
}


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>input </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto p-auto">
<div class="container">
<div class="card"> 
<br> <br>         <div class="card-header bg-secondary"> 
  <h2 class="text-center text-warning">Input New Student</h2> </div>
  <form action="" method="POST" class="">
    <div class="form-group">
      <label for="name">RollNumber:</label>
      <input type="text" class="form-control" id="rollnum" placeholder="Enter rollnumber" name="rollnumber">
    </div>
    <div class="form-group">
      <label for="name">S_Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Student name" name="name">
    </div>
    
    <div class="form-group">
      <label for="dob">S_Date of Birth:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter DOB" name="dob">
    </div>
    <div class="form-group">
      <label for="pwd">GUID:</label>
      <input type="text" class="form-control" id="guid" placeholder="Enter guid" name="guid">
    </div>
 
   <div>
    <button class="btn btn-success" type="submit" name="submit"> Submit 
     </button> <br>
</div>
  </form>
</div>
</div>
</div>

</body>
</html>