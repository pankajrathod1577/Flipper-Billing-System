<?php
include('connection.php');
include('adminbar.php');
session_start();

$iname =$_GET['itemname'];

$query = "DELETE FROM `additem` WHERE item_name='$iname'";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "record deleted";
	?>
	
	<meta http-equiv = "refresh" content = "0; url = http://localhost/billing%20system/itemlist.php "/>
	
	<?php
}
else
{
	echo "failed to delete";
}
?>