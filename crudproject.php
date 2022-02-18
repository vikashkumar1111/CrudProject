<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudproject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-light">
 
 <div class="container bg-dark text-light p-3 rounded my-4">
     <div class="d-flex align-items-center justify-content-between px-3">
         <h2>
             <a href="index.php" class="text-white text-decoration-none" > <i class="bi bi-bar-chart-fill"></i> i8 School </a>
          </h2>
</div>
</div>
        <div class="container mt-5 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th width="55%" scope="col" class="rounded-start" colspan=3>CRUD PROJECT</th>
                   
                </tr>
                
            </thead>
            
            <tbody CLASS="BG-WHITE">

             <tr>
             <td><button class="btn btn-primary"><a href="display_student.php" class="text-white text-decoration-none"> <i class="bi bi-folder-symlink"></i> Student Table </a></button></td>
             <td><button class="btn btn-primary"><a href="display_guid.php" class="text-white text-decoration-none"> <i class="bi bi-folder-symlink"></i> Guardian Table </a></button></td>
             <td><button class="btn btn-primary"><a href="display_emp.php" class="text-white text-decoration-none"> <i class="bi bi-folder-symlink"></i> Employees Table </a></button></td>

            </tr>



            </tbody>
            </table>
         </div>
       </div>
    </div>
            
 
</body>
</html>