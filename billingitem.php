<?php
include("connection.php");
include('adminbar.php');
session_start();


//$invoice = mt_rand();
$date = date('d-m-y');

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
 

  <header>
    <div class="text-center" style="margin-top:  120px;">
    </div>
  </header>
  
  <div class="container"> 
		<h2 class="text-center mb-4">Item Billing</h2>    
			<div class="row">           
				<div class="col-md-8">    
					<form action="#" method="post" autocomplete="off">
						 <!--<div>
							<label>bill no</label>
							<input class="form-control" name="billno" placeholder="bill no" required value="<?php echo $invoice; ?> " /><br />
						</div> -->
						<div>
							  <!--<label>bill date</label>-->
							<input class="form-control" name="date" placeholder="bill date" required value="<?php echo $date; ?> " /><br />
						</div>
						<div>
							 <!--<label>customer name</label>-->
							<input class="form-control" name="cusname" placeholder="customer name" required value="<?php echo $_POST['cusname']; ?> " /><br />
						</div>
						<div>
							 <!--<label>customer mobile number</label>-->
							<input class="form-control" name="cusmnum" placeholder="customer mobile number" required value="<?php echo $_POST['cusmnum']; ?> " /><br />
						</div>
					</form>
				</div> 
			</div>
	</div><br><br>
	<div class="container" > 
		<div class="row justify-right">    
			<h2 class="text-center mb-4">shopping list</h2>
		</div>
		<div class="col-md-8">    
			    <form action="billingitem.php" method="post" autocomplete="off">
					<div class="input-group mb-3">
						<input name="userinput" type="text" class="form-control" placeholder="add an item..." aria-label="Add an item" aria-describedby="basic-addon2" required />
						<div class="input-group-append">
						<button class="btn btn-outline-info" name="searchid" id="enter" type="submit">Add</button>
						</div>
					</div>
				</form>
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



 <?php

if(isset($_POST['searchid']))
{
	$id = $_POST['userinput'];
	$query = "SELECT * FROM `additem` WHERE  item_name='$id' ";
	$data = mysqli_query($conn,$query);

	$total = mysqli_num_rows($data);
	
	

	if($total !=0)
	{
		
?>
	<table class="table" border="3">
		<tr class="bg-dark text-white text-center">
		<th scope="col">Barcode</th>
		<th scope="col">Item name</th>
		<th scope="col">price</th>
		<th scope="col">quentity</th>
		<th scope="col">total</th>
		<th scope="col">Operation</th>
		</tr>
	<!--<div class="qtySelector text-center">
  <i class="fa fa-minus decreaseQty"></i>
  <input type="text" class="qtyValue" value="1" />
  <i class="fa fa-plus increaseQty"></i>
</div>-->
	
<?php
		while($result = mysqli_fetch_assoc($data))
		{
			echo "
				<tr class='text-center'>
				<td> $result[barcode] </td>
				<td> $result[item_name] </td>
				<td> $result[price_per_item] </td>
				<td><a><input type='number' min='1' id='qty'  class='form-control text-right'></a></td>
				<td></td>
				<td><a href='?itemname=$result[item_name]'><input type='submit' value='delete' class='btn btn-primary bg-danger'></a>
				</td>
				</tr>
				";
		}
	}
	else
	{
		echo "no record found";
	}
}
?>
</table>