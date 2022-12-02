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

        <!-- Row Starts -->
        <div class="row" style="margin-top: 30px">
            <div class="col-lg-6 col-md-6 col-12">
                <div id='Productsales'></div>

                <script>
                  var trace1 = {
                      x: ['September', 'October', 'November', 'December'],
                      y: [35, 15, 20, 33],
                      type: 'scatter'
                    };

                    var data = [trace1];
                    var layout = {
                      title: 'Products Sales',
                    };

                    Plotly.newPlot('Productsales', data, layout);
                </script>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                  <div id='CourseEnrollment'></div>

                  <script>
                    var data = [
                        {
                          x: ['September', 'October', 'November' , 'December'],
                          y: [30, 15, 10, 45],
                          marker:{
                            color: ['rgba(204,204,204,1)', 'rgba(204,204,204,1)', 'rgba(204,204,204,1)', 'rgba(204,204,204,1)']
                          },
                          type: 'bar'
                        }
                      ];

                      var layout = {
                          title: 'Course Enrollment',
                      };

                      Plotly.newPlot('CourseEnrollment', data, layout);
                  </script>
              </div>
        </div>

        <!-- Row Starts -->
        <div class="row" style="margin-top: 30px">

        <!-- Column Starts -->
          <div class="col-md-3 col-lg-3 col-12">

              <div class="row">
                  <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                    <div class="card-body">
                      <h1 class="card-title">10</h1>
                      <h4>Courses</h4>
                      <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewCourseModal">
                            Add New
                          </button>

                          <!-- Modal Starts-->
                          <div class="modal fade" id="addNewCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                        <form action="adminDashBoard.php" method = "POST">
                                            <div class="mb-3">
                                                <!-- <label for="username" class="form-label">Username</label> -->
                                                <input type="text" class="form-control" id="coursename" name="coursename" placeholder="Course Name">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="coursedescription" name="coursedescription" placeholder="Course Description">
                                            </div>

                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                                            </div>
                  
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form> 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Ends-->
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                  <div class="card-body">
                    <h1 class="card-title">25</h1>
                    <h4>Products</h4>

                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewProductModal">
                            Add New
                          </button>

                          <!-- Modal Starts-->
                          <div class="modal fade" id="addNewProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                        <form action="adminDashBoard.php" method = "POST">
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
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Ends-->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                  <div class="card-body">
                    <h1 class="card-title">30</h1>
                    <h4>PCR</h4>

                    <?php
                        // $showAlert = false;
                        // $showError = false;
                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                            $district = $_POST["district"];
                            $thana = $_POST["thana"];
                            $phone = $_POST["phone"];
                            $exists = false;
                            
                                $sql3 ="INSERT INTO `Police_Station` (`District`, `Thana`, `Phone`) VALUES ('$district', '$thana', '$phone')";

                                if ($conn->query($sql3) === TRUE) {
                                    echo  '<script>alert("New record created successfully")</script>';

                                } else {
                                    echo "Error: " . $sql3 . "<br>" . $conn->error;
                                }

                        }
                      ?>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewPCRModal">
                            Add New
                          </button>

                          <!-- Modal Starts-->
                          <div class="modal fade" id="addNewPCRModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New Police Staion</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                        <form action="adminDashBoard.php" method = "POST">
                                            <div class="mb-3">
                                                <!-- <label for="username" class="form-label">Username</label> -->
                                                <input type="text" class="form-control" id="district" name="district" placeholder="District Name">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="thana" name="thana" placeholder="Thana Name">
                                            </div>

                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            </div>
                  
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form> 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Ends-->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 15px">
                  <div class="card-body">
                    <h1 class="card-title">20</h1>
                    <h4>Books</h4>

                          <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNewBookModal">
                            Add New
                          </button>

                          <!-- Modal Starts-->
                          <div class="modal fade" id="addNewBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                        <form action="adminDashBoard.php" method = "POST">
                                            <div class="mb-3">
                                                <!-- <label for="username" class="form-label">Username</label> -->
                                                <input type="text" class="form-control" id="bookname" name="bookname" placeholder="Book Name">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="bookdescription" name="bookdescription" placeholder="Book Description">
                                            </div>

                                            <div class="mb-3">
                                                <!-- <label for="password" class="form-label">Password</label> -->
                                                <input type="text" class="form-control" id="bookprice" name="bookprice" placeholder="Book Price">
                                            </div>
                  
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form> 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Ends-->
                  </div>
                </div>
              </div>

          </div>
        <!-- Column Ends -->

        <!-- Column Starts -->
          <div class="col-md-9 col-lg-9 col-12">

          <!-- Harassment Table Starts -->
          <div class="div text-center" id="feedback">
              <h3 style="margin-bottom: 40px">
                Harassment Complaints
              </h3>
          </div>
      
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Bywhom</th>
                  <th scope="col">Place</th>
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
	               $sql1 = "select * FROM Harassment_Complaint";
                
                  $result1 = mysqli_query($mysqli, $sql1);
                    if ($result1->num_rows > 0): 
                  
                ?>

                <?php while($array=mysqli_fetch_row($result1)): ?>
                <tr>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>

                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>

                <?php endif; ?>
                <?php mysqli_free_result($result1); ?>
              </tbody>
            </table>
            <!-- Harassment Table Ends -->


           <!-- Mental Support Table Starts -->
          <div class="div text-center" id="feedback">
              <h3 style="margin-bottom: 40px; margin-top: 90px">
                  Mental Support List
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
	               $sql2 = "select * FROM MENTAL_SUPPORT";
                
                  $result2 = mysqli_query($mysqli, $sql2);
                    if ($result2->num_rows > 0): 
                  
                ?>

                <?php while($array=mysqli_fetch_row($result2)): ?>
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
                <?php mysqli_free_result($result2); ?>
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