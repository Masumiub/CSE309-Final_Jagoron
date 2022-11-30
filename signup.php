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
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $email = $_POST["email"];
        $role = $_POST["role"];

        $exists = false;

        if(($password == $cpassword) && $exists==false){

            $sql ="INSERT INTO `USERS` (`Name`, `Username`, `Password`, `Email`, `Role`) VALUES ('$name', '$username', '$password', '$email', '$role')";
            $result = mysqli_query($conn, $sql);

            if($result){
               $showAlert = true;
            }
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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3D1673; padding: 25px;">

    <div class="container">
      <a class="navbar-brand" href="index.html"
        style="font-family: Poppins, Arial; color: white; font-weight: 400;">Jagoron</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: white"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
      </ul>

      <form class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#courses" style="color: white">Courses</a>
          </li>
          <li class="nav-item">

          </li>
          <li class="nav-item">
            <a class="nav-link" href="policebd.html" style="color: white">Police Numbers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="#Tutorials">Self Defense&nbsp; <i
                class="fa fa-youtube-play"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html" style="color: white">Free PDF Books</a>
          </li>

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" style="color: white">
              More
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="#freepdfs">Free PDF Books</a>
              <a class="dropdown-item" href="#massage">A Massage</a>
              <a class="dropdown-item" href="#saythanks">Start Learning!</a>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" style="color: white" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="login.php">Signup</a>
          </li>
        </ul>
        
      </form>
      </div>
    </div>
  </nav>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <?php
        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Success! Your Account was created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>' ;
        }

        if($showError){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Sorry! Please confirm the password again.
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
      <h1 class="display-1" style="font-family: Poppins, Arial; font-weight: 400; margin-top: 40px;">Signup</h1>
      <h4 style="font-family: Poppins, Arial; ">Hey! Be a Part to Our System.</h4>

      <div style="margin-top: 30px;">
      <form action="signup.php" method = "POST">

            <div class="mb-3">
                <!-- <label for="username" class="form-label">Username</label> -->
                <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
            </div>

            <div class="mb-3">
                <!-- <label for="username" class="form-label">Username</label> -->
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            
            <div class="mb-3">
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="mb-3">
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
            </div>

            <div class="mb-3">
                <!-- <label for="username" class="form-label">Username</label> -->
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
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
                <button type="submit" class="btn btn-primary">Signup</button>
                <a href="login.php" class="btn btn-success" tabindex="-1" role="button">Login</a>
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

