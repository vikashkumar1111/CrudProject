

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Emp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="col-lg-12 m-auto p-auto">
<div class="container">
<div class="card"> 



<br><br><h2 class="text-center text-warning">Employees Details</h2> <button type="button" class="btn btn-success col-sm-2 "><a href="insert_emp.php" class="text-white">Insert Employees </a></button>
              
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Emp_ID</th>
        <th>Emp_Name</th>
        <th>Emp_Age</th>
        <th>Emp_Address</th>
        <th>DELETE</th>
        <th>UPDATE</th>
      </tr>
    </thead>
    <tbody>

    <?php
include "db_student.php";

$dis="SELECT * FROM `employees`";

$query=mysqli_query($conn,$dis);
 
while ($res=mysqli_fetch_array($query)){
?>

      <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['age'];?></td>
        <td><?php echo $res['address'];?></td>
        <td> <button class="btn-danger btn"><a href="delete_emp.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button></td>
        <td> <button class="btn-primary btn"><a href="update_emp.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button></td>    </tr>
      <?php
}
    ?>
    </tbody>

  </table>
</div>
</div>
</div>

</body>
</html>