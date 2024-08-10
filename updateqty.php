<?php
class ajaxvalid {
	function formValidate() 
	{
		date_default_timezone_set('Asia/Kolkata');
		include("db.php");
		$return = array();

		$id=$_POST['id'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$subtotal = $_POST['subtotal'];
		$client=$_POST['client'];

		$sql1="UPDATE Cart set ProductPrice='$price',ProductQuantity='$qty',SubTotal='$subtotal' where CartID='$id'";
		
		$result1 =  mysqli_query($conn,$sql1);
		
		$sql1="SELECT SUM(SubTotal) as 'total' FROM Cart WHERE UserID='$client'";
		$result =  mysqli_query($conn,$sql1) or die(mysqli_error($conn));
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0) {
			$rows = array();
			while($r = mysqli_fetch_assoc($result)) {
				$rows[] = $r;
			}
			return json_encode($rows);
		}
	}
}
$ajaxvalid1 = new ajaxvalid;
echo $ajaxvalid1->formValidate();
?>