<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style/admin.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="post" action="admin_login.php">
        <h3>Admin Login</h3>
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="Password">
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Log in</button>
</form>
    </div>
</body>
</html>
<?php 
include('database\connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn,"SELECT * FROM `admin_login` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    if($query){
      $result = mysqli_num_rows($query);
        if($result>0){
          while($row = mysqli_fetch_array($query)){
            $admin = $row['name'];
          }
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $admin;
            header('location:home.php');
        }else{
            echo '<script>alert("email and password not correct");</script>';
        }
    }
}
?>