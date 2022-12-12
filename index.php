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


   $Division = '';
	 $Location = '';
	 $noOFReports = '';

	// //query to get data from the table
	 $sql = "SELECT * FROM `Harassment_Map` ";
   $result = mysqli_query($conn, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

    $Division = $Division . '"'. $row['Division'].'",';
		$Location = $Location . '"'. $row['Location'].'",';
		$noOFReports = $noOFReports . '"'. $row['noOfReports'] .'",';
        
	}

  $Division = trim($Division,",");
	$Location = trim($Location,",");
	$noOFReports = trim($noOFReports,",");

  //$conn = mysqli_connect("localhost", "root", "", "jagoron");
  ?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Jagoron - Protest Aganist All Violance</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">


  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>




  <style>

    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: #ffffff;
      /* background-image: linear-gradient(to bottom right, #ffdceb, #ffffff); */
    }

    .container2 {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      border: 1px solid #888;
      width: 80%;

    }


    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->
  <?php require 'partials/nav.php'?>

  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->



  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->
  <div class="container-fluid mycontain" style="background-color: #3D1673">
  <div class="row align-items-center text-center text-white">

    <div class="col-md-12 col-lg-12 col-12" style="line-height: 30px">
      <h1 class="display-1" style="font-family: Poppins, Arial; font-weight: 400; margin-top: 40px;">Jagoron</h1>
      <h3 style="font-family: Poppins, Arial; ">Start Protesting Against All Violance!</h3>
      <p>Don't Wait for Others. Start Learning Self Defense From Today. Collect Necessary Elements for Self Defense.
      </p>
      <button type="button" style="margin-top: 7px;" onclick="document.getElementById('id01').style.display='block'"
        class="btn btn-success ">Contact BD Police</button>
      <a button type="button" style="margin-top: 7px;" class="btn btn-primary"
        href="harassmentComplaintForm.php">Harassment Report</a>


      <div id="id01" class="modal">

        <form class="modal-content animate" action="action_page.php" method="post">
          <div class="container" style="background-color:#f1f1f1; height: 45px;">
          </div>
          <div class="container2">
            <label for="sub" style="color:black;"><b>Subject</b></label>
            <input class="form-control" type="text" placeholder="Enter Subject" name="subject" required>
            <label for="eml" style="color:black;"><b>Email</b></label>
            <input class="form-control" type="email" placeholder="Enter Your Email" name="email" required>
            <label for="sms" style="color:black;"><b>Your Message</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Email"
              name="message" required></textarea>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 7px;">Send</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
              class="btn btn-danger btn-sm" style="margin-top: 7px;">Cancel</button>
          </div>
        </form>

      </div>

      <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>

      <img src="Header2.png" width="100%" alt="header">

    </div>
  </div>
</div>

  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->

  <main class="container">

  <!-- ************************************* -->
  <!-- --------Self-Defense Product Row-------->
  <!-- ************************************* -->
    <div id="products">
      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px;">Carry for Self-Defence</h1>
      </div>

      <div class="row" style="margin-top: 80px;">

        <div class="col-lg-4" style="line-height: 30px">
          <i class="fa fa-eyedropper fa-2x"></i>
          <h4>Pen Knife</h4>
          <p>penknives were used for thinning and pointing quills to prepare them for use as dip pens and, later, for
            repairing or re-pointing the nib. Prior to the invention of the pencil sharpener.</p>
          <p><a button type="button" class="btn btn-success btn-sm"
              href="products.php">Buy
              Now</a></p>
        </div>

        <div class=" col-lg-4" style="line-height: 30px">
          <i class="fa fa-fire-extinguisher fa-2x"></i>
          <h4>Pepper Spray</h4>
          <p>Pepper spray is a chemical compound that irritates the eyes, causing a burning sensation, pain, and
            temporary blindness by dilating the eyes' capillaries and inflaming membranes.</p>
          <p><a button type="button" class="btn btn-success btn-sm"
              href="products.php">Buy
              Now</a></p>
        </div>

        <div class="col-lg-4" style="line-height: 30px">
          <i class="fa fa-space-shuttle  fa-2x"></i>
          <h4>Lipstick Stun Gun</h4>
          <p>Purple Lipstick Taser Stun Gun with flashlight is portable and discreet. It packs 3 million volts of charge
            and is powered by a built-in rechargeable battery. </p>
          <p><a button type="button" class="btn btn-success btn-sm"
              href="products.php">Buy Now</a></p>
        </div>
      </div>

      <div class="text-center mb-4 mt-4">
        <a button type="button" style="margin-top: 7px;" class="btn btn-primary" href="products.php">View More</a>
      </div>
    </div>
  <!-- ************************************* -->
  <!-- --------Self-Defense Product Row-------->
  <!-- ************************************* -->


  <!-- ************************************* -->
  <!-- --------Tutorials Row-------->
  <!-- ************************************* -->

    <div id="Tutorials">
      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Self-Defence Tutorials</h1>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4 col-12">

          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">5 Self-Defense Moves Every Woman Should Know | HER Network</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=KVpxP3ZZtAc">Watch Now!</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4 col-12">

          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">7 Self-Defense Techniques for Women from Professionals | Bright Side</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=T7aNSRoDCmg">Watch Now!</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4 col-12">

          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">5 Choke Hold Defenses Women MUST Know | Self Defense | Aja Dang</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=-V4vEyhWDZ0">Watch Now!</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4">

          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">How to Make Homemade Pepper Spray - Self Defence Weapon | Glamrs </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=WWfquvm_Xn4">Watch Now!</a>
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">Make Your Own DIY Weapon For Self Defence (Easy) | Hack'nroll </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=SDBEaBTKCIs&list=PLuTzdcaA5YOqKnDWB0-hdf4sT0LyFDXxM">Watch
                    Now!</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="Thumb.png" class="img-fluid" alt="header">
            <div class="card-body">
              <p class="card-text">Awesome Simple DIY Self Defense Weapon Kubotan Made from Used Pens</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.youtube.com/watch?v=ufwSOgjBur0">Watch Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

      <div class="text-center mb-4 mt-4">
        <a button type="button" style="margin-top: 7px;" class="btn btn-primary" href="tutorials.php">View More</a>
      </div>
  <!-- ************************************* -->
  <!-- --------Tutorials Row------------------->
  <!-- ************************************* -->

  <!-- ************************************* -->
  <!-- ----------Map Starts------------------->
  <!-- ************************************* -->
  <div id="map">
      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Overall Bangladesh Scenario</h1>
      </div>

      <div class="row " style="padding: 0px; margin-top: 40px;" id="all">
            <div class="col-md-9 col-lg-9 col-12">
                <div id="myDiv" style=""></div>
            </div>

            <script>
                      google.charts.load('current', {
                        'packages':['geochart'],
                        'mapsApiKey': 'AIzaSyCxdwmjX_paSOGfTwybgyiv3BIXuqtFXVA'
                      });
                      google.charts.setOnLoadCallback(drawRegionsMap);

                      function drawRegionsMap() {
                        var data = google.visualization.arrayToDataTable([
                        ['Division','Location','NoOFReports'],

                            <?php
                              $sqlmap = "SELECT * FROM `Harassment_Map`";
                              $fire = mysqli_query($conn, $sqlmap);
                              while($res = mysqli_fetch_assoc($fire)){
                                    echo "[' " .$res['Division']." ', ' " .$res['Location']." ',".$res['noOfReports']."],";
                              }
                            ?>
                        ]);
                        
                        var options = {
                          region: 'BD', // Africa
                          resolution: 'provinces',
                          
                          colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
                          backgroundColor: '#f5f5f5', //#81d4fa
                          datalessRegionColor: '#f5f5f5', //#f8bbd0
                          defaultColor: '#f5f5f5',
                        };

                        var chart = new google.visualization.GeoChart(document.getElementById('myDiv'));
                        chart.draw(data, options);
                      };
            </script>

            <div class="col-md-2 col-lg-2 col-12">
              <h3>Harassment reports we recevied last 3 months:</h3>
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Location</th>
                  <th scope="col">NoOfReports</th>
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
	               $sqltable = "select * from Harassment_Map";
                
                  $resulttable = mysqli_query($mysqli, $sqltable);
                    if ($resulttable->num_rows > 0): 
                  
                    ?>
                <?php while($array=mysqli_fetch_row($resulttable)): ?>
                <tr>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($resulttable); ?>
              </tbody>
            </table>

            </div>

        </div>

  <!-- ************************************* -->
  <!-- ----------Map Ends------------------->
  <!-- ************************************* -->

  <!-- ************************************* -->
  <!-- ----------Suicide Charts Starts--------->
  <!-- ************************************* -->

      <div class="row" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-6 col-12">
            <!-- <h1>Suicide Rate in Bangladesh</h1> -->
            <div id='suicideChartDiv'><!-- Plotly chart will be drawn inside this DIV --></div>

            <script>
              var data = [
                  {
                    x: [2012, 2013, 2014, 2015, 2016, 2017],
                    y: [9642, 10129, 10400, 10500, 10600, 11095],
                    type: 'bar'
                  }
                ];
                var layout = {
                  title: 'Suicide Rate in Bangladesh',
                };

                Plotly.newPlot('suicideChartDiv', data,layout);
            </script>

        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <div id='depressionChartDiv'><!-- Plotly chart will be drawn inside this DIV --></div>

          <script>
            var data = [{
              values: [4.9, 7.4, 6.7, 12.7],
              labels: ['Suicidal Ideation', 'Suicidal plan', 'Suicidal Attempt', 'Any Suicidal Behavior'],
              type: 'pie'
            }];

            var layout = {
              title: 'Suicidal behavior of Adolescents for Depression',
              // height: 400,
              // width: 500
            };

            Plotly.newPlot('depressionChartDiv', data, layout);
          </script>
          </div>
      </div>

  <!-- ************************************* -->
  <!-- ----------Suicide Charts Ends----------->
  <!-- ************************************* -->



  <!-- ************************************* -->
  <!-- ----------Courses Row------------------->
  <!-- ************************************* -->

    <div id="courses">
      <div class="text-center">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Special Courses</h1>
      </div>

      <div class="row" id="portfolio">

        <div class="col-md-6 col-lg-6 col-12">
          <div class="card mb-4 shadow-sm">
            <img src="Coursebanner1.jpg" height="300px" alt="Banner">
            <div class="card-body">
              <p class="card-text">Women's Self Defense Tips - Self Defence for Women Safety | Udmey Course | Free</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.udemy.com/course/womens-self-defense-tips/">Enroll Now!</a>
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
                  <a button type="button" class="btn btn-success btn-sm"
                    href="https://www.udemy.com/course/wing-chun-form-level-1-siu-lim-tao-free/">Enroll Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mb-4 mt-4">
        <a button type="button" style="margin-top: 7px;" class="btn btn-primary" href="Courses.php">View More</a>
      </div>

    </div>
  <!-- ************************************* -->
  <!-- ----------Courses Row------------------->
  <!-- ************************************* -->


  <!-- ************************************* -->
  <!-- ----------Books Row------------------->
  <!-- ************************************* -->

    <div class="text-center" id="freepdfs">
      <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-top: 90px; margin-bottom: 50px;">Self-Defense Books</h1>
    </div>

    <div class="row">

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa   fa-book fa-2x"></i>
            <h5>Krav Maga</h5>
            <p>for Women</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/krav-maga-for-women-your-ultimate-program-for-self-defense-e176028574.html">Read</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa   fa-book fa-2x"></i>
            <h5>Self defense</h5>
            <p>Tips + Tricks</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/self-defense-tips-and-tricks-practical-self-defense-solutions-for-the-street-home-workplace-and-travel-e196761846.html">Read</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa   fa-book fa-2x"></i>
            <h5>Weapons of</h5>
            <p>Fitness</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/weapons-of-fitness-the-womens-ultimate-guide-to-fitness-self-defense-and-empowerment-e163308461.html">Read</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa fa-book fa-2x"></i>
            <h5>Self-defense</h5>
            <p>for Women</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/self-defense-for-women-a-simple-method-e158252445.html">Read</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa fa-book fa-2x"></i>
            <h5>Self-Defense</h5>
            <p>Assault Prevention</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/self-defense-and-assault-prevention-for-girls-and-women-e158260082.html">Read</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3" style="line-height: 30px">
        <div class="card mb-4 shadow-sm">
          <div class="text-center mb-4 mt-4">
            <i class="fa fa-book fa-2x"></i>
            <h5>Her Own</h5>
            <p>Hero</p>
            <a button type="button" class="btn btn-success btn-sm"
              href="https://www.pdfdrive.com/her-own-hero-the-origins-of-the-womens-self-defense-movement-e200489500.html">Read</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mb-4 mt-4">
      <a button type="button" style="margin-top: 7px;" class="btn btn-primary" href="Books.php">View More</a>
    </div>
  <!-- ************************************* -->
  <!-- ----------Books Row------------------->
  <!-- ************************************* -->
  </main>


<!-- ************************************* -->
<!-- ----------Mental Support---------------->
<!-- ************************************* -->
<div style="background-color: #3D1673; margin-top: 90px;">
<div class="container">
    <div class="row d-flex align-items-center text-white" style="padding: 40px;">
      <div class="col-md-7 col-lg-7 col-12">
        <h1 style="font-family: Poppins, Arial ; font-size: 62px; font-weight: 800;">Are you Depressed?</h1>
        <h5>Not Finding anyone to share your sorrows?</h5>

        <h2 style="font-family: Poppins, Arial; font-size: 32px;">Don't Worry! You are not Alone.</h2>

        <a button type="button" class="btn btn-success btn-lg" href="MentalStressSupportForm.php">Let us Know</a>

      </div>
      <div class="col-md-5 col-lg-5 col-12">
        <img src="Mental_stress.png" alt="Mental_stress" style="width:90%;">
      </div>
    </div>
  </div>
</div>
<!-- ************************************* -->
<!-- ----------Mental Support---------------->
<!-- ************************************* -->

  <main class="container">

<!-- ************************************* -->
<!-- ----------Message Row------------------->
<!-- ************************************* -->

    <div id="massage" >

      <div class="row" style="margin-top: 120px;">

        <div class="col-md-2 col-lg-3">
          <img src="Woman.svg" alt="founder" width="100%">
        </div>

        <div class="col-md-10 col-lg-9" style="line-height: 30px">
          <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800;  margin-bottom: 50px;">Message for All</h1>
          <br>
          <p style="font-size: 20px;"><i>" Always aim high, work hard, and care deeply about what you believe in. And,
              when you stumble, keep faith. And, when you’re knocked down, get right back up and never listen to anyone
              who says you can’t or shouldn’t go on." </i></p><br>
          <h4>- Hillary Rodham Clinton </h4>
          <br>
          <p style="font-size: 20px;"><i>"Don’t let anyone speak for you, and don’t rely on others to fight for
              you."</i></p><br>
          <h4>- Michelle Obama </h4>
        </div>

      </div>

    </div>

  </main>
<!-- ************************************* -->
<!-- ----------Message Row------------------->
<!-- ************************************* -->

<!-- ************************************* -->
<!-- ----------Lawyer Support---------------->
<!-- ************************************* -->


<div style="background-color: #3D1673; margin-top: 90px;">
<div class="container">
    <div class="row d-flex align-items-center text-white" style="padding: 40px;">
      <div class="col-md-7 col-lg-7 col-12">
        <h1 style="font-family: Poppins, Arial ; font-size: 62px; font-weight: 800;">Need Law Support?</h1>
        <h5>Not Finding anyone to find your justice?</h5>

        <h2 style="font-family: Poppins, Arial; font-size: 32px;">Don't Worry! We have Professional Lawyer.</h2>

        <a button type="button" class="btn btn-success btn-lg" href="lawSupportForm.php">Let us Know</a>

      </div>
      <div class="col-md-5 col-lg-5 col-12">
        <img src="lawyer.png" alt="lawyer" style="width:90%;">
      </div>
    </div>
  </div>
</div>


<!-- ************************************* -->
<!-- ----------Lawyer Support---------------->
<!-- ************************************* -->

<!-- ************************************* -->
<!-- ----------Strategies Row---------------->
<!-- ************************************* -->
<main class="container">
    <div id="Strategies" style="margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-bottom: 50px;">Self-Defense Strategies</h1>
      </div>

      <div class="row">
        <div class="col-md-12">


        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                TRUST YOUR INSTINCTS
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Too many women enroll in a self-defense class after they've been assaulted. When they recount the
                  incident, they often say the same thing: "I had this bad feeling, but I told myself not to be
                  paranoid," or "I knew I shouldn't have gone, but I didn't want to hurt his feelings."</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                PRACTICE TARGET DENIAL
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Don't make yourself an accessible target. The outcome of a battle is often determined before the first
                  blow is struck. When you have the opportunity to escape from a situation before it turns bad, take it.
                  If an approaching person gives you the creeps, walk to the other side of the street. If an elevator
                  door opens and the guy standing inside makes the hair on the back of your neck stand up, wait for the
                  next elevator. Those actions aren't cowardly; rather, they're a smart way to eliminate danger.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                PRESENT YOURSELF WITH CONFIDENCE
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Be aware of the message your body sends to those around you. Like animals, human predators target
                  those they consider the weakest or most vulnerable. Attackers search for women who appear frightened,
                  confused or distracted. They look for women who walk with their head down and their hands stuffed in
                  their pockets, or perhaps one who's overburdened with packages or distracted by children.
                  Remember that attackers do not want to bait a fight; they want an easy mark. By walking with
                  confidence and awareness — looking around and keeping your head up and shoulders back — you'll
                  dramatically reduce the likelihood of becoming a target in the first place.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                SET STRONG VERBAL BOUNDARIES
              </button>
            </h2>
            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Good verbal skills are an effective self-defense tool, one you're likely to use more frequently and
                  successfully than any physical technique. When a predator engages you in conversation, he's actually
                  "interviewing" you to see if you'll make a good victim. An experienced attacker is practiced at using
                  his words to freeze you with fear, thus reducing the chance that you'll try to defend yourself.

                  Although an aggressive verbal confrontation can be terrifying, you have to be strong enough to show
                  the attacker he's picked the wrong victim. If you stand tall, remain calm and respond confidently and
                  assertively, you'll probably "fail" his interview. The power of your voice alone can cause him to seek
                  an easier target.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                MAINTAIN A NON-CONFRONTATIONAL STANCE
              </button>
            </h2>
            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">In a self-defense situation, one of your secret weapons is the element of surprise. Most predators
                  feel confident that you won't defend yourself, and you should capitalize on that misconception. If you
                  assume a martial arts stance, it immediately tells the attacker that you know how to fight. In
                  response, he's likely to be more aggressive.

                  Instead, use a confident, relaxed stance in which your hips and shoulders are forward, your arms are
                  bent, and your hands are up and open. This conciliatory posture may mislead the attacker into thinking
                  you're willing to comply. If it becomes necessary for you to strike, he probably won't be prepared for
                  it.</div>
            </div>
          </div>



        </div>



        <!-----------
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1. TRUST YOUR INSTINCTS
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Too many women enroll in a self-defense class after they've been assaulted. When they recount the
                  incident, they often say the same thing: "I had this bad feeling, but I told myself not to be
                  paranoid," or "I knew I shouldn't have gone, but I didn't want to hurt his feelings."

                  If something doesn't feel right, it probably isn't safe — that's the bottom line. Many women have been
                  conditioned to ignore the little voice that tells them trouble is coming. Your instinct is the best
                  detector of danger. The next time you hear that little voice, listen to what it's saying.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. PRACTICE TARGET DENIAL
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Don't make yourself an accessible target. The outcome of a battle is often determined before the first
                  blow is struck. When you have the opportunity to escape from a situation before it turns bad, take it.
                  If an approaching person gives you the creeps, walk to the other side of the street. If an elevator
                  door opens and the guy standing inside makes the hair on the back of your neck stand up, wait for the
                  next elevator. Those actions aren't cowardly; rather, they're a smart way to eliminate danger.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. PRESENT YOURSELF WITH CONFIDENCE
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Be aware of the message your body sends to those around you. Like animals, human predators target
                  those they consider the weakest or most vulnerable. Attackers search for women who appear frightened,
                  confused or distracted. They look for women who walk with their head down and their hands stuffed in
                  their pockets, or perhaps one who's overburdened with packages or distracted by children.
                  Remember that attackers do not want to bait a fight; they want an easy mark. By walking with
                  confidence and awareness — looking around and keeping your head up and shoulders back — you'll
                  dramatically reduce the likelihood of becoming a target in the first place.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4. SET STRONG VERBAL BOUNDARIES
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Good verbal skills are an effective self-defense tool, one you're likely to use more frequently and
                  successfully than any physical technique. When a predator engages you in conversation, he's actually
                  "interviewing" you to see if you'll make a good victim. An experienced attacker is practiced at using
                  his words to freeze you with fear, thus reducing the chance that you'll try to defend yourself.

                  Although an aggressive verbal confrontation can be terrifying, you have to be strong enough to show
                  the attacker he's picked the wrong victim. If you stand tall, remain calm and respond confidently and
                  assertively, you'll probably "fail" his interview. The power of your voice alone can cause him to seek
                  an easier target.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    5. MAINTAIN A NON-CONFRONTATIONAL STANCE
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  In a self-defense situation, one of your secret weapons is the element of surprise. Most predators
                  feel confident that you won't defend yourself, and you should capitalize on that misconception. If you
                  assume a martial arts stance, it immediately tells the attacker that you know how to fight. In
                  response, he's likely to be more aggressive.

                  Instead, use a confident, relaxed stance in which your hips and shoulders are forward, your arms are
                  bent, and your hands are up and open. This conciliatory posture may mislead the attacker into thinking
                  you're willing to comply. If it becomes necessary for you to strike, he probably won't be prepared for
                  it.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    6. KEEP A SAFE DISTANCE
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                  Everyone has a comfort zone or personal space. When an aggressor enters that zone, you're
                  uncomfortable because you know you'd need that space if you had to fight back. When you're in an
                  adrenalized state, you need a quarter of a second to react to an assault. This "reactionary gap"
                  should be anticipated when you think about your comfort zone.

                  You should try to maintain approximately one to one-and-a-half arm lengths between yourself and the
                  aggressor. If he starts closing in, you need to use verbal boundaries. If he still doesn't back off,
                  it's time to get physical.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    7. USE THE ELEMENT OF SURPRISE
                  </button>
                </h2>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body">
                  Most predators assume you cannot defend yourself. Therefore, you should take advantage of the element
                  of surprise. If you're engaged in a conversation, you have the opportunity to use verbal skills and a
                  non-confrontational stance to entice the aggressor into dropping his guard. If you're grabbed from
                  behind, you must respond immediately. In either case, putting up a fight can surprise him and increase
                  your chance of landing the first blow.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingEight">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    8. KEEP YOUR TECHNIQUES SIMPLE
                  </button>
                </h2>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body">
                  One of the main effects of an adrenaline release is the loss of fine motor skills. That means simple
                  gestures such as unlacing your fingers or pulling your hands out of your pockets can become much more
                  challenging. And the odds of your executing a beautiful joint lock or high kick rapidly dwindle.

                  No matter which martial art you practice, learn techniques that are basic and stick with them in a
                  self-defense scenario. I recommend the following:
                  <ul>
                    <li> Heel-palm strike. Hitting with an open hand reduces the chance that you'll injure your hand and
                      enables you to more easily attack from a non-confrontational stance in which you're holding your
                      hands up and open while you set verbal boundaries. Then, if your attacker steps into your comfort
                      zone — bang! — he gets it right in the face.</li>
                    <li>Eye strike. The eye strike can be used in a standing or prone position. Often, simply driving
                      your fingers toward your assailant's eyes will cause him to recoil. Even if you don't make
                      contact, it creates space to set up a more devastating blow.</li>
                    <li>Knee strike. This technique is recommended over any type of standing kick because it is easy to
                      use and can be delivered while you stay centered and close to the ground — which is crucial when
                      you're adrenalized. A knee to the groin can end a fight immediately. </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingNine">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    9. DON'T PANIC IF YOU'RE KNOCKED DOWN
                  </button>
                </h2>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body">
                  More often than not, women end up on the ground when they're assaulted. The good news is that most
                  assailants are not skilled ground fighters; they're bullies who are used to knocking women down and
                  forcing them to comply. Remember that the heel-palm strike and eye strike work well on the ground.
                  It's a good idea to have a few kicks that work there, as well.

                  In particular, the side thrust kick functions in a variety of scenarios. If you're on the ground and
                  your assailant is standing, it gives you an advantage because your legs are longer than his arms. That
                  means he'll have to expose his body to your kick if he wants to reach you.

                  Knee strikes also function effectively on the ground. While you struggle with your attacker, he
                  probably won't protect his groin. Once you see an opening, get close enough to strike upward into his
                  crotch.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTen">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    10. FOLLOW THROUGH
                  </button>
                </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                <div class="card-body">
                  The fight isn't over until the threat no longer exists. Therefore, you must be 110-percent committed
                  to the battle. If you fight back and then pause, you give up the initial advantage you gained from
                  using the element of surprise.

                  Once your opponent knows you can fight, it becomes more difficult for you to prevail. To survive, you
                  must continue your barrage until it's safe to stop striking and escape.
                </div>
              </div>
            </div>----->


          </div>
        </div>
      </div>
    </div>
<!-- ************************************* -->
<!-- ----------Strategies Row---------------->
<!-- ************************************* -->
</main>

<!-- ************************************* -->
<!-- ----------Say Thanks Row---------------->
<!-- ************************************* -->
<div style="background-color: #3D1673; padding: 20px; margin-top: 120px;">
<div class="container">
    <div id="saythanks">
      <div class="row text-white align-items-center" style="margin-top: 120px;">

        <div class="col-lg-6 col-md-6 col-12">
          <img src="Wecando.svg" width="80%" alt="Women">
        </div>

        <div class="col-lg-6 col-md-6 col-12" style="line-height: 30px;">

          <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; ">Don't Wait.</h1>
          <h1 class="display-4" style="font-family: 'Poppins', 'Arial'; font-weight: 800; margin-bottom: 50px;">You Can Do This!</h1>

          <p>Start Protesting Against All Violance! If you Protest, Then You Represent Bangladesh. Learn Self Defense
            from Today! So, Don't be late and be connected with us today!</p>
          <a button type="button" class="btn btn-danger btn-sm" href="tel:999">Call 999</a>
          <a button type="button" class="btn btn-primary btn-sm" href="tel:109">Call 109</a>
          <button type="button" onclick="document.getElementById('id01').style.display='block'"
            class="btn btn-success btn-sm">Email Police</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ************************************* -->
<!-- ----------Say Thanks Row---------------->
<!-- ************************************* -->
</body>

<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->
<footer class="py-5" style="background-color: #3D1673;">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; jagoronbd - MM2022</p>
  </div>
</footer>
<!-- ************************************* -->
<!-- --------------Footer----------------- -->
<!-- ************************************* -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>