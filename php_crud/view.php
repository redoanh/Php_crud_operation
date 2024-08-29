<?php
include "connect.php"; // Ensure your database connection file is included

if (isset($_GET['viewid'])) {
    $id = $_GET['viewid'];

    // Fetch the student data from the database
    $sql = "SELECT * FROM `password` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
    } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container my-5">
        <h2>Student Details</h2>
        <table class="table table-bordered">
            <tr>
                <th style="background-color:#fbf77f">ID</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th >Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th >Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th >Mobile</th>
                <td><?php echo $mobile; ?></td>
            </tr>
            <tr>
                <th >Password</th>
                <td><?php echo $password; ?></td>
            </tr>
        </table>
        <a href="studentd.php" class="btn btn-primary">Go Back</a>
    </div>
</body>
</html>
