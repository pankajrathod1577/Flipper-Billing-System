<?php
session_start();
	include('adminbar.php');
	include("connection.php");
	
	if(isset($_POST['save']))
	{
		$username = $_POST['uname'];
		$oldpass = $_POST['oldpwd'];
		$newpass = $_POST['newpwd'];
		$conpass = $_POST['conpwd'];
	    if($newpass == $conpass)
		{
			$query = "SELECT * FROM login WHERE Username='$username' && Password='$oldpass'";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			if($total > 0)
			{
				$query = "UPDATE  login SET  Password='$newpass' WHERE Username='$username' && Password='$oldpass'";
				mysqli_query($conn,$query);
				echo "password update successfully";
			}
		}
		else
		{
			echo "new password & conform new password does not match";
		}
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
    <title> Login | Billing System </title>
  </head>

 
  <body>
  
 
  
  <header>
    <div class="text-center" style="margin-top:  120px;">
    </div>
  </header>
  
  <div class="container" > <!--Start login Container-->
	<h2 class="text-center mb-4">change password</h2>    <!-- login Heading -->
    <div class="row">           <!--Start login Row-->
      <div class="col-md-8">    <!--Start login 1st Column-->
        <form action="password.php" method="post" autocomplete="off">
		<div>
			<label>user name</label>
            <input class="form-control" type="text" name="uname" placeholder="user name" required /><br />
		</div>
		<div>
			<label>old password</label>
            <input class="form-control" type="text" name="oldpwd" placeholder="old password" required /><br />
		</div>
		<div>
		    <label>new password</label>
            <input class="form-control"  type="text" name="newpwd" placeholder="new password" required /><br /> 
		</div>
		<div>
			<label>conform new password</label>
            <input class="form-control" id="myInput" type="password" name="conpwd" placeholder="conform new password" required /><br /> 
			<input type="checkbox" onclick="myFunction()">show password
		</div>
            <script>function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
					x.type = "text";
					} else {
							x.type = "password";
							}
					}
			</script>
			<input class="btn btn-primary" type="submit" value="submit" name="save"/><br /><br />
        </form>
      </div>  <!-- End login 1st Column-->

	
 

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
   
   

    </body>
</html>


