<?php
	include("connection.php");
	include("adminbar.php");
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
  <title> ADMIN PANEL</title>
  </head>

	<body>
  <header>
    <div class="text-center" style="margin-top:0px;">
    </div>
  </header>
  
  <div class="container pt-5" id="aboutus">
    <h2 class="text-center">CONTACT LIST</h2>  
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





<?php
   
	
	$query = "SELECT * FROM `contactus` ";
	$data = mysqli_query($conn,$query);

	$total = mysqli_num_rows($data);
	
	

	if($total !=0)
	{
		
?>
	<table class="table" border="3">
		<tr class="bg-dark text-white text-center">
		<th scope="col">Name</th>
		<th scope="col">Phone</th>
		<th scope="col">Email</th>
		<th scope="col">Message</th>
		<th scope="col">Operation</th>
		</tr>
	
	
<?php
		while($result = mysqli_fetch_assoc($data))
		{
			echo "
				<tr class='text-center'>
				<td> $result[Name] </td>
				<td> $result[Phone] </td>
				<td> $result[Email] </td>
				<td> $result[Message] </td>
				<td><a href='condelete.php?name=$result[Name]'><input type='submit' value='delete' class='btn btn-primary bg-danger'></a>
				</td>
				</tr>
				";
		}
	}
	else
	{
		echo "no record found";
	}
?>
</table>

