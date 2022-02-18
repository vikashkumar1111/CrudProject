<?php
include 'db_student.php';
$id=$_GET['id'];
if(isset($_POST['submit'])){

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];

$up="UPDATE `employees` SET `id`='$id',`name`='$name',`age`='$age',`address`='$address' WHERE `id`='$id'";

//echo $up;
$query=mysqli_query($conn,$up);

if($query){
    //echo 'Inserted';
    header('location:display_emp.php');
}
else {
    echo "not update:";
}


}



?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees </title>
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
<br> <br>         <div class="card-header bg-secondary"> <h2 class="text-center text-white">Insert Employees</h2> </div>
  <form action="" method="POST">
<?php
include 'db_student.php';
$id=$_GET['id'];
$view="SELECT * FROM `employees` WHERE `id`='$id'";

$query=mysqli_query($conn,$view);

while ($res=mysqli_fetch_array($query)){

?>





    <div class="form-group">
      <label for="emp_id">Employees ID:</label>
      <input type="text" class="form-control" id="emp_id" placeholder="Enter emp_id" name="id" value="<?php echo $res['id']; ?>">
    </div>
    <div class="form-group">
      <label for="name">Employees Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $res['name']; ?>">
    </div>
    <div class="form-group">
      <label for="age">Employees Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $res['age']; ?>">
    </div>
    <div class="form-group">
      <label for="address">Employees Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $res['address']; ?>">
    </div>
   

    <button type="submit" name="submit" class="btn btn-primary">Submit</button> <br> 

<?php
}

?>

  </form>
</div>
</div>
</div>

</body>
</html>