<?php
include('connection.php');
include('adminbar.php');
?>

<?php
	if($_POST['ragister'])
	{
		$id = $_post['id'];
		$barcode = $_POST['barcode'];
		$stock   = $_POST['stock'];
		$iname   = $_POST['iname'];
		$stype   = $_POST['stype'];
		$ppitem  = $_POST['ppitem'];
		$description = $_POST['description'];
		
		$query = "INSERT INTO additem values('$id','$barcode','$stock','$iname','$stype','$ppitem','$description')";
		$data = mysqli_query($conn,$query);
		
		if($data)
		{
			echo "data inserted into database";
		}
		else
		{
			echo "failed";
		}
	}
	header("location:additem.php");
?>