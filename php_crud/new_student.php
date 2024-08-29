<?php
include "connect.php";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql= "insert into `password`(name,email,mobile,password) values('$name','$email','$mobile','$password')";

$result=mysqli_query($con,$sql);

if ($result){
  header("location:studentd.php");

}else {
  die(mysqli_errno($con));
}
}
?>
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>new student</title>
  </head>
  <body>
   <div class="container my-5">

  
   <form method="post" >
  <div class="mb-3" autocomplete="off">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name">
  </div>
  <div class="mb-3" autocomplete="off">
    <label class="form-label">email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" >
  </div>
  <div class="mb-3" autocomplete="off">
    <label class="form-label">mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile">
  </div>
  <div class="mb-3" autocomplete="off">
    <label class="form-label">password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password">
  </div>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-dark"><a href="studentd.php" class="text-light" style="text-decoration: none;" >go back</a></button>
</form>
   </div>

   
  </body>
</html>