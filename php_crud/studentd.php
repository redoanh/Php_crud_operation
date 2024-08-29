<?php

include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container my-5">
        
        <button class="btn btn-primary" style="padding-bottom:5px;"><a href="new_student.php" style="text-decoration: none;" class="text-light">Add student</a></button>

        <table class="table table-bordered ">
  <thead>
    
    <tr >
      <th scope="col">SL NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Moile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
<?php
$sql= "select * from `password`";
$result= mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '
        <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
      <button class="btn btn-info"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;">Update</a></button>
      <button class="btn btn-warning"><a href="view.php?viewid='.$id.' " class="text-light" style="text-decoration: none;">View</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a></button>
     <td></tr>';
    
}
}

?>
  </thead>
 
</table>
    </div>

    
</body>
</html>