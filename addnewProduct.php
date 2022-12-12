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
    <title>Admin Dash Board</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

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


  <div class="container">
        
        <div class="row">
            <div class="col-md-7 col-lg-7 col-12" style="display: flex">
                <div style="margin-top: 40px;">
                  <h1>ADMIN DASHBOARD</h1>
                  <h5>Welcome, <?php echo $_SESSION['username']?></h5>
                  <button type="button" class="btn btn-primary btn-sm" style="border-radius: 30px;">Active</button>
                </div>
            </div>
            <div class="col-md-5 col-lg-5"></div>
        </div>
        <h1 style="margin-top: 50px">Add New Product</h1>
        <?php
                              $showAlert = false;
                              if($_SERVER["REQUEST_METHOD"] == "POST"){

                                  $productname = $_POST["productname"];
                                  $productdescription = $_POST["productdescription"];
                                  $productprice = $_POST["productprice"];
                                  $exists = false;
                                  
                                  if($exists==false){
                                    $sqlproduct ="INSERT INTO `Product` (`ProductName`, `ProductDes`, `Price`) VALUES ('$productname', '$productdescription', '$productprice')";
                                    $resultproduct = mysqli_query($conn, $sqlproduct);
                                    //mysqli_query($conn, $sqlproduct);
                                    if($resultproduct){
                                      $showAlert = true;
                                    }
                                }

                              }
                              ?>
                                        <form action="addnewProduct.php" method = "POST">
                                            <div class="mb-3">
                                                <!-- <label for="username" class="form-label">Username</label> -->
                                                <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="productdescription" name="productdescription" placeholder="Product Description">
                                            </div>

                                            <div class="mb-3">
                                                <!-- <label for="username" class="form-label">Username</label> -->
                                                <input type="text" class="form-control" id="productprice" name="productprice" placeholder="Product Price">
                                            </div>
                  
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form> 

                                        </div>

</div>


<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->
<footer class="py-5 fixed-bottom" style="background-color: #3D1673; margin-top: 90px;">
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