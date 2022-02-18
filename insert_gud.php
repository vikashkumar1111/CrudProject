
<?php
include 'db_student.php';

if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $stud_id=$_POST['std_id'];



     $ins="INSERT INTO `guardian` (`id`,`name`,`phone`,`student_id`) VALUES ('$id','$name','$phone','$stud_id')";

        $query=mysqli_query($conn,$ins);
     if($query){
         header('location:display_guid.php');
     }   
     else{
         echo "Not inserted:";
     }



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert guid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  
<div class="col-lg-6 m-auto p-auto">
<div class="container">
<div class="card"> 
<br> <br>         <div class="card-header bg-secondary"> <h2 class="text-center text-white">Insert Employees</h2> </div>
  <form action="" method="POST">
    <div class="form-group">
      <label for="emp_id">Guardian ID:</label>
      <input type="number" class="form-control" id="emp_id" placeholder="Enter guid" name="id" required>
    </div>
    <div class="form-group">
      <label for="name">Guardian Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Guardian_name" name="name" required>
    </div>
    <div class="form-group">
      <label for="age">Guardian Phone:</label>
      <input type="phone" class="form-control" id="age" placeholder="Enter Guardian_Phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="address">student id:</label>
      <input type="number" class="form-control" id="address" placeholder="Enter student_id" name="std_id" required>
    </div>
    <div>
   
    <button type="submit" class="btn btn-success col-lg-12" name=submit>Submit</button>
</div>
  </form>
</div>
</div>
</div>

</body>
</html>