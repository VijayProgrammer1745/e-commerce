<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class ajaxvalid {
	function formValidate() 
	{
		date_default_timezone_set('Asia/Kolkata');
		include("db.php");
		$return = array();
		
		$productid=$_POST['productid'];
		$productno=$_POST['productno'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$custid=$_POST['custid'];
		$colorid=$_POST['colorid'];
		$subtotal = $qty * $price;
		$AddedDate = date('Y-m-d H:i:s');
		
		$query = "SELECT * FROM Cart WHERE UserID='".$custid."' AND ProductID='".$productid."'";
		$result =  mysqli_query($conn,$query);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows > 0)
		{
			$sql1="UPDATE Cart SET UserID='$custid',ProductID='$productid',ProductPrice='$price',ProductQuantity='$qty',SubTotal='$subtotal',ColorID='$colorid' where UserID='$custid' AND ProductID='$productid'";
		}else{
			$sql1="INSERT into Cart(ProductID,ProductQuantity,ProductPrice,UserID,Discount,SubTotal,ColorID,AddedDate) values('$productid','$qty','$price','$custid','0','$subtotal','$colorid','$AddedDate')";
		}
		
		$result =  mysqli_query($conn,$sql1);
		
		return json_encode($sql1);
		
	}

}
$ajaxvalid1 = new ajaxvalid;
echo $ajaxvalid1->formValidate();
?>