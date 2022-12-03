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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

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

  <?php require 'partials/loggednav.php'?>
  <!-- ************************************* -->
  <!-- --------------NavBar----------------- -->
  <!-- ************************************* -->



  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->
  <div class="container-fluid mycontain" style="background-color: #3D1673">
    <div class="row align-items-center text-center text-white">

      <div class="col-md-12 col-lg-12 col-12" style="line-height: 30px">
        <h1 class="display-1" style="font-family: Poppins, Arial; font-weight: 400; margin-top: 40px;">Police Stations</h1>
        <h3 style="font-family: Poppins, Arial; ">Collect Your Nearest Police Station Numbers.</h3>
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

        <img src="Header3.png" width="100%" alt="header">

      </div>
    </div>
  </div>

  <!-- ************************************* -->
  <!-- --------------Header----------------- -->
  <!-- ************************************* -->


  <main class="container">


    <div id="dhaka" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Dhaka Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>


    <div id="borishal" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Borishal Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>


    <div id="sylhet" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Sylhet Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>



    <div id="chittagong" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Chittagong Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>


    <div id="Khulna" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Khulna Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>



    <div id="Rajshahi" style=" margin-top: 90px;">

      <div class="text-center mb-4 mt-4">
        <h2 class="display-4" style="font-family: Poppins, Arial ; font-weight: 800;">Rajshahi Division</h2>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-lg-12 col-md-12 col-12" style="line-height: 30px">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Thana</th>
                <th scope="col">Phone</th>
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
               $sql1 = "SELECT sno, Thana, Phone FROM Police_Station WHERE District='Dhaka' ";
              
                $result1 = mysqli_query($mysqli, $sql1);
                  if ($result1->num_rows > 0): 
                
              ?>

              <?php while($array=mysqli_fetch_row($result1)): ?>
              <tr>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
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
        </div>

      </div>
    </div>

  </main>
</body>



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

  
  <!-- ************************************* -->
  <!-- --------------Footer----------------- -->
  <!-- ************************************* -->
  <footer class="py-5" style="background-color: #3D1673;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; jagoronbd - Md Masum Musfique</p>
    </div>
  </footer>
  <!-- ************************************* -->
  <!-- --------------Footer----------------- -->
  <!-- ************************************* -->
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </html>