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

<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST["name"];
        $bywhom = $_POST["bywhom"];
        $place = $_POST["place"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $description= $_POST["description"];
        $exists = false;
        
            $sql ="INSERT INTO `Harassment_Complaint` (`Name`, `Bywhom`, `Place`, `Email`, `Address`, `Description`) VALUES ('$name', '$bywhom', '$place', '$email', '$address', '$description')";

            if ($conn->query($sql) === TRUE) {
                echo  '<script>alert("New record created successfully")</script>';

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harassment Complaint Form</title>
 
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
  <?php require 'partials/loggednav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->



    <div class="container">
        <h1 style="margin-top: 120px; margin-bottom: 40px;">Harassment Complaint Form</h1>
        <form action="harassmentComplaintForm.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Your Full Name</label>
              <input type="text" class="form-control" id="exampleInputName" aria-describedby="fullName" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">By Whom You were harassed</label>
                <input type="text" class="form-control" id="exampleInputName2" aria-describedby="fullName" name="bywhom">
            </div>

            <div class="mb-3">
                <label for="exampleInputPlace" class="form-label">Mention the place where you were harassed</label>
                <input type="text" class="form-control" id="exampleInputPlace" aria-describedby="fullplace" name="place">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputaddress" class="form-label">Your Address</label>
                <input type="text" class="form-control" id="exampleInputaddress" aria-describedby="fullAddress" name="address">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
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