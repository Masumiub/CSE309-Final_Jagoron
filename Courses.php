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
    <title>Courses</title>

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

          <li class="nav-item">
            <a class="nav-link" style="color: white" href="login.php">Signout</a>
          </li>
        </ul>
        
      </form>
      </div>
    </div>
  </nav>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <main class="container">

  <div id="courses" style=" margin-top: 90px;">

    <div class="text-center mb-4 mt-4" >
             <h2 class="display-4" style="font-family: Product Sans, Arial ; margin-bottom: 60px;">Specialized Courses</h2>
             </div>
        <div class="row" id="portfolio">
        <div class="col-md-6 col-lg-6">
              <div class="card mb-4 shadow-sm">
                  <img src="Coursebanner1.jpg" height="300px" alt="Banner">
                <div class="card-body">
                  <p class="card-text">Women's Self Defense Tips - Self Defence for Women Safety | Udmey Course | Free</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/womens-self-defense-tips/">Enroll Now!</a>
          
                    </div>
    
                  </div>
                </div>
              </div>
            </div>
        <div class="col-md-6 col-lg-6">
              <div class="card mb-4 shadow-sm">
                  <img src="Coursebanner2.jpg" height="300px" alt="Banner">
                <div class="card-body">
                  <p class="card-text">Learn Wing Chun Sil Lim Tao At Home FREE! With David Wong | Udmey Course | Free</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/wing-chun-form-level-1-siu-lim-tao-free/">Enroll Now!</a>
          
                    </div>
    
                  </div>
                </div>
              </div>
            </div>
        </div>
    

        <div class="row" id="portfolio">
            <div class="col-md-6 col-lg-6">
                  <div class="card mb-4 shadow-sm">
                      <img src="Coursebanner1.jpg" height="300px" alt="Banner">
                    <div class="card-body">
                      <p class="card-text">Women's Self Defense Tips - Self Defence for Women Safety | Udmey Course | Free</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/womens-self-defense-tips/">Enroll Now!</a>
              
                        </div>
        
                      </div>
                    </div>
                  </div>
                </div>
            <div class="col-md-6 col-lg-6">
                  <div class="card mb-4 shadow-sm">
                      <img src="Coursebanner2.jpg" height="300px" alt="Banner">
                    <div class="card-body">
                      <p class="card-text">Learn Wing Chun Sil Lim Tao At Home FREE! With David Wong | Udmey Course | Free</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/wing-chun-form-level-1-siu-lim-tao-free/">Enroll Now!</a>
              
                        </div>
        
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            <div class="row" id="portfolio">
                <div class="col-md-6 col-lg-6">
                      <div class="card mb-4 shadow-sm">
                          <img src="Coursebanner1.jpg" height="300px" alt="Banner">
                        <div class="card-body">
                          <p class="card-text">Women's Self Defense Tips - Self Defence for Women Safety | Udmey Course | Free</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/womens-self-defense-tips/">Enroll Now!</a>
                  
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col-md-6 col-lg-6">
                      <div class="card mb-4 shadow-sm">
                          <img src="Coursebanner2.jpg" height="300px" alt="Banner">
                        <div class="card-body">
                          <p class="card-text">Learn Wing Chun Sil Lim Tao At Home FREE! With David Wong | Udmey Course | Free</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a button type="button" class="btn btn-success btn-sm" href="https://www.udemy.com/course/wing-chun-form-level-1-siu-lim-tao-free/">Enroll Now!</a>
                  
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
<footer class="py-5" style="background-color: #3D1673; margin-top: 90px;">
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