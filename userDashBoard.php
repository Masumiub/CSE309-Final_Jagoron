<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "jagoron";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
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
    <title>User Dash Board</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            <a class="nav-link" style="color: white" href="index.html">Signout</a>
          </li>
        </ul>
        
      </form>
      </div>
    </div>
  </nav>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->


    <div class="container">
        
      <div class="row">
          <div class="col-md-7 col-lg-7 col-12" style="display: flex">
              <div style="margin-top: 40px;">
                <h1>USER DASHBOARD</h1>
                <h5>Welcome, <?php echo $_SESSION['username']?></h5>
                <button type="button" class="btn btn-primary btn-sm" style="border-radius: 30px;">Active</button>
              </div>
          </div>
          <div class="col-md-5 col-lg-5"></div>
      </div>

        <!-- Row Starts -->
        <div class="row" style="margin-top: 30px">

            <div class="col-md-3 col-lg-3 col-12">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                    <div class="card-body">
                    <h1 class="card-title">10</h1>
                    <h4>Courses</h4>
                    <a href="Courses.html" class="btn btn-success btn-sm" role="button">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-12">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                    <div class="card-body">
                    <h1 class="card-title">25</h1>
                    <h4>Products</h4>
                    <a href="products.html" class="btn btn-success btn-sm" role="button">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-12">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                    <div class="card-body">
                    <h1 class="card-title">30</h1>
                    <h4>PCR</h4>
                    <a href="policebd.html" class="btn btn-success btn-sm" role="button">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-12">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                    <div class="card-body">
                    <h1 class="card-title">10</h1>
                    <h4>Books</h4>
                    <a href="Books.html" class="btn btn-success btn-sm" role="button">View</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->


        <!-- Row Starts -->
        <div class="row" style="margin-top: 40px">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-dark bg-light mb-3" style=" border-radius: 15px">
                    <div class="card-body">
                        <h3 class="card-title">Harassment Complaints</h3>
                        <a href="harassmentComplaintForm.php" class="btn btn-success btn-sm" role="button">Make Harassment Complaint</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="card text-dark bg-light mb-3" style=" border-radius: 15px">
                    <div class="card-body">
                        <h3 class="card-title">Mental Support</h3>
                        <a href="MentalStressSupportForm.php" class="btn btn-success btn-sm" role="button">Ask for Mental Support</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row Ends -->

    </div>

      
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