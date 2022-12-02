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
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
            /* background-image:linear-gradient(to bottom right, #ffdceb, #ffffff); */
        }
    </style>
</head>
    
<body>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <?php require 'partials/loggednav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->


<main class="container">
          
<div id="Tutorials">
  <div class="text-center">
    <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Self-Defence Tutorials</h1>
  </div>
  
       <div class="row" id="portfolio">
      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
          <div class="card-body">
            <p class="card-text">5 Self-Defense Moves Every Woman Should Know | HER Network</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=KVpxP3ZZtAc">Watch Now!</a>
    
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
           <img src="Thumb.png" class="img-fluid" alt="header">
          <div class="card-body">
            <p class="card-text">7 Self-Defense Techniques for Women from Professionals | Bright Side</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=T7aNSRoDCmg">Watch Now!</a>
           
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
          <img src="Thumb.png" class="img-fluid" alt="header">
          <div class="card-body">
            <p class="card-text">5 Choke Hold Defenses Women MUST Know | Self Defense | Aja Dang</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=-V4vEyhWDZ0">Watch Now!</a>
              
              </div>
             
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
           <img src="Thumb.png" class="img-fluid" alt="header" >
          <div class="card-body">
            <p class="card-text">How to Make Homemade Pepper Spray - Self Defence Weapon |  Glamrs </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
               <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=WWfquvm_Xn4">Watch Now!</a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
        <img src="Thumb.png" class="img-fluid" alt="header">
          <div class="card-body">
            <p class="card-text">Make Your Own DIY Weapon For Self Defence (Easy) |  Hack'nroll </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=SDBEaBTKCIs&list=PLuTzdcaA5YOqKnDWB0-hdf4sT0LyFDXxM">Watch Now!</a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-4 shadow-sm">
           <img src="Thumb.png" class="img-fluid" alt="header">
          <div class="card-body">
            <p class="card-text">Awesome Simple DIY Self Defense Weapon Kubotan Made from Used Pens</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a button type="button" class="btn btn-success btn-sm" href="https://www.youtube.com/watch?v=ufwSOgjBur0">Watch Now!</a>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      </div>

    </div>

  </main>


    
<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->
<footer class="py-5" style="background-color: #3D1673; margin-top: 90px">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; jagoronbd - Md Masum Musfique</p>
  </div>
</footer>
<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>