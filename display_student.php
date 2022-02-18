<?php















?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display </title>
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

<br> <br>      
 <button type="button" class="btn btn-primary col-sm-2 " ><a href="student_input.php" class="text-white">
  Insert Student</a>
</button>
  <div class="card-header bg-dark"> 
  <h2 class="text-center text-white">Student Details</h2>
  </div>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>RollNumber</th>
        <th>SName</th>
        <th>SDateofBirth</th>
        <th>GUID</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
     

<?php

include 'db_student.php';


    $dis="select * from `student`";

    $query=mysqli_query($conn,$dis);

    while ($res=mysqli_fetch_array($query)){

    

        ?>







    <tr>
        <td><?php echo $res['RollNumber'];   ?></td>
        <td><?php echo $res['SName'];   ?></td>
        <td><?php echo $res['SDateofBirth'];   ?></td>
        <td><?php echo $res['GUID'];   ?></td>
        <td> <button class="btn-danger btn"><a href="delete_student.php?RollNumber=<?php echo $res['RollNumber']; ?>" class="text-white"> Delete </a> </button></td>
        <td> <button class="btn-primary btn"><a href="update_student.php?RollNumber=<?php echo $res['RollNumber']; ?>" class="text-white"> Update </a> </button></td>
      </tr>

      <?php
    }
      ?>
        
    </tbody>
  </table>
</div>

</body>
</html>