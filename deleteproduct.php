<?php
class ajaxvalid {
	function formValidate() 
	{
		date_default_timezone_set('Asia/Kolkata');
		include("db.php");
		$return = array();
		
		$id=$_POST['id'];
		
		
			   $sql1="DELETE from Cart where CartId='$id'";
		
		$result =  mysqli_query($conn,$sql1);
		
		return json_encode($return);
		
	}

}
$ajaxvalid1 = new ajaxvalid;
echo $ajaxvalid1->formValidate();
?>