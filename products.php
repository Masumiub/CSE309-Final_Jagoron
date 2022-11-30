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
    <title>Products</title>

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

  <div id="books" style=" margin-top: 90px;">

      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px">Self-Defense Products</h1>
      </div>

        <div class="row">
            <div class="col-lg-9 col-md-9 col-12">

                  <div class="row" >
                  <div class="col-md-6 col-lg-6 col-12">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="product.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Product 1 </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-12">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="product.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Product 2 </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
              </div>

            

            <div class="row" >
                  <div class="col-md-6 col-lg-6 col-12">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="product.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Product 1 </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  
                  <div class="col-md-6 col-lg-6 col-12">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="product.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Product 1 </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
              </div>

              <div class="row">
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class="card mb-3" >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="product.png" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Product 1 </h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class="card mb-3" >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="product.png" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Product 1 </h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <a button type="button" class="btn btn-success btn-sm" href="#">Download</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>

                </div>

            <div class="col-lg-3 col-md-3 col-12">

              <h1>Select A Product to Order</h1>
                <form>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>

                   <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Product Unit Price</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Your Address</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Your Phone Number</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                  </div>

                  <button type="submit" class="btn btn-success btn-lg d-block w-100" style="margin-top: 15px;">Order Now</button>

                </form>
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