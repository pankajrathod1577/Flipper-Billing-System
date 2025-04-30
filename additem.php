<?php
include('adminbar.php');
session_start();
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
  
  
 <body  style="background-image: url(images/Banner.jpg);"> 
  <header>
    <div class="text-center" style="margin-top:  120px;">
    </div>
  </header>
  
  <div class="container"> 
		<h2 class="text-center mb-4">ADD ITEM</h2>    
			<div class="row">           
				<div class="col-md-8">    
					<form action="adminadd.php" method="post" autocomplete="off">
						<div>
							 <!--<label>barcode</label>-->
							<input class="form-control" name="barcode" placeholder="barcode" /><br />
						</div>
						<div>
							 <!--<label>stock</label>-->
							<input class="form-control" name="stock" placeholder="no. of item " required /><br />
						</div>
						<div>
							 <!--<label>item name</label>-->
							<input class="form-control" name="iname" placeholder="item name" required /><br />
						</div>
						<div>
							 <!--<label>select type</label>-->
							<select class="form-control" name="stype" placeholder="select type" >
									<option selected>select type</option>
									<option value="soap">soap</option>
									<option value="oil">oil</option>
									<option value="dried fruit">dried fruit</option>
							</select><br />
						</div>
						<div>
							 <!--<label>price per item</label>-->
							<input class="form-control" name="ppitem" placeholder="price per item" required /><br />
						</div>
						<div>
							 <!--<label>Description</label>-->
							<textarea class="form-control" name="description" placeholder="description" style="height:120px;" required ></textarea><br />
						</div>
						<div>
						<input class="btn btn-primary" type="submit" value="submit" name="ragister"/>
						<input class="btn btn-primary" type="reset" value="reset" name="reset"/><br /><br />
						</div>
					</form>
				</div> 
			</div>
	</div>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>