<?php

include('navbar.php');

try {
	$db=new mysqli("localhost","root","","bilsys");
	}catch (Exception $exc){
		echo $exc->getTracessAsString();
	}
	if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])){
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$q=$db->query("INSERT INTO `contactus`(`Name`, `Phone`, `Email`, `Message`) VALUES ('$name','$phone','$email','$message')");
		
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
  <title> Contactus| Billing System</title>
  </head>
  <body>

  <header>
    <div class="text-center" style="margin-top:  120px;">
    </div>
  </header>
  
  <!--Start Contact Us-->
  <div class="container" id="Contact"> <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2>    <!-- Contact Us Heading -->
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
        <form action="#" method="post" autocomplete="off">
          <input class="form-control" name="name" placeholder="Name" required /><br />
          <input class="form-control" name="phone" placeholder="Phone" required /><br />
          <input class="form-control" name="email" placeholder="Email" required /><br />
          <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;" required ></textarea><br />
          <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
        </form>
      </div>  <!-- End Contact Us 1st Column-->

      <div class="col-md-4 text-center">    <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        BILLING SYSTEM Pvt Ltd, <br>
        Pankaj,Vatsal <br>
        Bhavnagar - 364001 <br>
        Phone: +0123456789 <br> 
        <a href="https://www.google.com" target="_blank">www.google.com</a> <br>
    
	   <br><br>
        <strong>Vadodara Branch:</strong> <br>
        VP Pvt Ltd, <br>
        Pankaj,Vatsal <br>
        Vadodara - 335009 <br>
        Phone: +0123456789 <br> 
        <a href="https://www.facebook.com" target="_blank">www.facebook.com</a> <br>
      </div>    <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>