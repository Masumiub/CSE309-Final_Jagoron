<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "jagoron";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["Role"];
    
    $sql ="Select * from USERS where Username = '$username' AND Password = '$password' AND Role = 'Admin'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num==1){
     $login = true;
     session_start();
     $_SESSION['loggedin'] = true;
     $_SESSION['username'] = $username;
     header("location: adminDashBoard.php");
    }

    else{
        $showError = "Passwords don't match!";
    }

  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["Role"];
    
    $sql2 ="Select * from USERS where Username = '$username' AND Password = '$password' AND Role = 'General User'"; //'$deg'
    $result2 = mysqli_query($conn, $sql2);
    $num2 = mysqli_num_rows($result2);

    if($num2==1){
     $login = true;
     session_start();
     $_SESSION['loggedin'] = true;
     $_SESSION['username'] = $username;
     header("location: userDashBoard.php");
    }

    else{
        $showError = "Passwords don't match!";
    }

  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["Role"];
    
    $sql3 ="Select * from USERS where Username = '$username' AND Password = '$password' AND Role = 'Lawyer'"; //'$deg'
    $result3 = mysqli_query($conn, $sql3);
    $num3 = mysqli_num_rows($result3);

    if($num3==1){
     $login = true;
     session_start();
     $_SESSION['loggedin'] = true;
     $_SESSION['username'] = $username;
     header("location: lawyerDashBoard.php");
    }

    else{
        $showError = "Passwords don't match!";
    }

  }
  ?>



<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Jagoron - Protest Aganist All Violance</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

  <style>

    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: #ffffff;
      
    }

  </style>

</head>
<body>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <?php require 'partials/nav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <?php

        if($login){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Success! You are logged in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>' ;
        }

        if($showError){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Sorry! Please check the password again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>' ;
            }

    ?>
  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->

  <div class="container-fluid mycontain" style="background-color: #3D1673">
  <div class="row align-items-center text-center text-white">

    <div class="col-md-4 col-lg-4 col-12"></div>

    <div class="col-md-4 col-lg-4 col-12" style="line-height: 30px">
      <h1 class="display-1" style="font-family: Poppins, Arial; font-weight: 400; margin-top: 40px;">Login</h1>
      <h4 style="font-family: Poppins, Arial; ">Hey! Welcome back to Our System.</h4>

      <div style="margin-top: 30px;">
      <form action="login.php" method = "POST">

            <div class="mb-3">
                <!-- <label for="username" class="form-label">Username</label> -->
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            
            <div class="mb-3">
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="mb-3">
                <!-- <label for="deg" class="form-label">Choose Your Role:</label> -->
                    <select class="form-select" aria-label="Default select example" name="role" >
                        <option value="General User">General User</option>
                        <option value="Admin">Admin</option>
                        <option value="Lawyer">Lawyer</option>
                    </select>
            </div>
                
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="index.html" class="btn btn-success" tabindex="-1" role="button">Back</a>
            </div>

        </form> 
    </div>

    <div class="col-md-4 col-lg-4 col-12"></div>

  </div>

  <div class="row">
    <div class="col-md-12 col-lg-12 col-12">
      <img src="Header2.png" width="100%" alt="header">
    </div>
   </div>

</div>

  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->

</body>

<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->
<footer class="py-5" style="background-color: #3D1673;">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; jagoronbd - Md Masum Musfique</p>
  </div>
</footer>
<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

