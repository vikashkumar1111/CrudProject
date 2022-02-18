

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display Guardian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container ">
<br><br> 
 <div class="col-lg-12 p-auto m-auto">
  <div class="card bg-secondary">      
                <br><br> <h2 class="text-center text-danger ">Guardian Details</h2>   
                
                <button type="button" class="btn btn-primary col-lg-2" data-toggle="modal" data-target="#insert">
                <i class="bi bi-person-plus"></i>
    Add Guardian
  </button>
  

   <!-- The Modal -->
   <div class="modal" id="insert">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Insert Guardian</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="col-lg-12 m-auto p-auto">
<div class="container">
<div class="card"> 
          <div class="card-header bg-secondary"> <h2 class="text-center text-white">Add New Guardian</h2> </div>
  <form action="insert_gud.php" method="POST">
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
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                
        <table class="table table-warning table-hover ">
          <thead class="thead-dark">
            <tr class="text-center">
                <th>Guardian id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>student_id</th>
                <th colspan="2">Action</th>
            </tr>
           </thead>


                <?php
                    include 'db_student.php';

                    $dis="SELECT * FROM `guardian`";
                    $query=mysqli_query($conn,$dis);

                    while ($res=mysqli_fetch_array($query)){
                    


                ?>



            <tbody>
                
                <tr class="text-center text-primary text-bold">
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['phone'];?></td>
                    <td><?php echo $res['student_id'];?></td>
                    <td><button class="btn btn-success"><a href="update_guid.php?id=<?php echo $res['id']; ?>" class="text-white"> <i class="bi bi-pencil-square"></i>Edit </a></button></td>
                    <td><button class="btn btn-danger"><a href="delete_guid.php?id=<?php echo $res['id']; ?>" class="text-white"> <i class="bi bi-trash"></i> </a></button></td>
                </tr>

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