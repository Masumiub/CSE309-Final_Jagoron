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
  <?php require 'partials/loggednav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <main class="container">

  <div id="books" style=" margin-top: 90px;">

      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px">Self-Defense Products</h1>
      </div>

        <div class="row mt-4">
            <!-- <div class="col-lg-9 col-md-9 col-12"> -->

                  <!-- <div class="row" > -->
                        <?php
                          $qurey = "SELECT * FROM Product";
                          $qurey_run = mysqli_query($conn, $qurey);

                          $check_book = mysqli_num_rows($qurey_run) > 0;

                          if($check_book){
                              while($row = mysqli_fetch_array($qurey_run))
                              {
                                ?>
                  <div class="col-md-4">
                      <div class="card mb-3" >
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="product.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title" id="proname"><?php echo $row['ProductName']; ?></h5>
                                <p class="card-text"> <?php echo $row['ProductDes']; ?> </p>
                                <p >Price: <span id="proprice"> <?php echo $row['Price']; ?></span> (in taka)</p>
                                
                                <button class="btn btn-primary btn-sm"onclick="setOrder()">Select</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>

                  <script>
                    function setOrder(){
                      var proname = document.getElementById("proname").innerHTML;
                      document.getElementById("productName").value = proname;

                      var proprice = document.getElementById("proprice").innerHTML;
                      document.getElementById("unitPrice").value = proprice;
                    }
                  </script>

                    <?php
                  
                }

            }
            else{
              echo "No Book Found";
            }
        ?>

                </div>

            <div class="col-lg-3 col-md-3 col-12" style="margin-top: 40px;">
            <?php
                        $showAlert = false;

                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                            $productName = $_POST["productName"];
                            $unitPrice = $_POST["unitPrice"];
                            $quantity = $_POST["quantity"];
                            $address = $_POST["address"];
                            $phone = $_POST["phone"];
                            $exists = false;
                            
                                $sqlcourse ="INSERT INTO `Order_list` (`ProductName`, `Price`, `Quantity`, `Address` , `Phone`) VALUES ('$productName', '$unitPrice', '$quantity', '$address', '$phone')";

                                 if ($conn->query($sqlcourse) === TRUE) {
                                     echo  '<script>alert("New record created successfully")</script>';
                                 
                                } else {
                                     echo "Error: " . $sqlcourse . "<br>" . $conn->error;
                                 }

                        }
                      ?>
              <h1>Select A Product to Order</h1>
                <form action="products.php" method="POST">

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="productName" name='productName' placeholder="">
                  </div>

                   <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Product Unit Price</label>
                      <input type="text" class="form-control" id="unitPrice" name="unitPrice" placeholder="">
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="">
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Your Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="">
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Your Phone Number</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                  </div>

                  <button type="submit" class="btn btn-success btn-lg d-block w-100" style="margin-top: 15px;">Order Now</button>

                </form>
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