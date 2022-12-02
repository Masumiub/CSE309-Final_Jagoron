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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    <div id="books">

    <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Self-Defence Books</h1>
    </div>

      <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="book.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Self Defense Book </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
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