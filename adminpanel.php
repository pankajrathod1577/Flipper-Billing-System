<?php
include('adminbar.php');
include("connection.php");
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>ADMIN PANEL | HOME</title>
</head>
                   
<body>
 

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/Banner.jpg);">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Billing System</h1>
      <p class="font-italic font-weight-bold st">Enjoy Your Shopping</p>
    </div>
  </header> <!-- End Header Jumbotron -->
  
  <!-- Start Team  -->
  <div class="jumbotron bg-danger" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->
      <h2 class="text-center text-white">Team Members</h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-6 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/pankaj1.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Pankaj Rathod</h4>
              <p class="card-text">MCA</p>
			  <p class="card-text">Bhavnagar</p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->
		
		 <div class="col-lg-6 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/vatsal.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Vatsal Chandrapal</h4>
              <p class="card-text">MCA</p>
			  <p class="card-text">Jamnagar</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->
      </div>     <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->
     
      
  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="https://www.google.com" target="_blank">Pankaj Vatsal</a> &copy; 2023. </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>
