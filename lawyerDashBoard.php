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
    <title>Lawyer DashBoard</title>

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


    <div class="container">
        
      <div class="row">
          <div class="col-md-7 col-lg-7 col-12" style="display: flex">
              <div style="margin-top: 40px;">
                <h1>LAWYER DASHBOARD</h1>
                <h5>Welcome, <?php echo $_SESSION['username']?></h5>
                <button type="button" class="btn btn-primary btn-sm" style="border-radius: 30px;">Active</button>
              </div>
          </div>
          <div class="col-md-5 col-lg-5"></div>
      </div>

        <!-- Row Starts -->
        <div class="row" style="margin-top: 30px">

        <!-- Column Starts -->
          <div class="col-md-12 col-lg-12 col-12">


           <!-- Mental Support Table Starts -->
          <div class="div text-center" id="feedback">
              <h3 style="margin-bottom: 40px; margin-top: 90px">
                  Lawyer Support List
              </h3>
          </div>
      
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                 $host = 'localhost';
	               $user = 'root';
	               $pass = '';
	               $db = 'jagoron';
	               $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	               //query to get data from the table
	               $sql = "select * FROM Lawyer_Support";
                
                  $result = mysqli_query($mysqli, $sql);
                    if ($result->num_rows > 0): 
                  
                ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>

                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>

                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
            <!-- Mental Support Table Ends -->

          </div>
        <!-- Column Ends -->

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