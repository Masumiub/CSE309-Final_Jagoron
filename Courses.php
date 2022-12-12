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
  <?php require 'partials/loggednav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <main class="container">

  <div id="courses" style=" margin-top: 90px;">

    <div class="text-center mb-4 mt-4" >
             <h2 class="display-4" style="font-family: Product Sans, Arial ; margin-bottom: 60px;">Specialized Courses</h2>
             </div>

        <div class="row mt-4">

        <?php
            $qurey = "SELECT * FROM Course";
            $qurey_run = mysqli_query($conn, $qurey);

            $check_course = mysqli_num_rows($qurey_run) > 0;

            if($check_course){
                while($row = mysqli_fetch_array($qurey_run))
                {
                  ?>

                 <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                         <img src="Coursebanner1.jpg" class="card-img-top img-fluid" height="300px" alt="Banner">
                        <h2 class="card-title"> <?php echo $row['CourseName']; ?> </h2>
                        <p class="card-text"> <?php echo $row['CourseDes']; ?> </p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $row['Link']; ?>">Enroll</a>  
                      </div>
                    </div>
                  </div> 
                  
                  <?php
                  
                }

            }
            else{
              echo "No course Found";
            }
        ?>
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