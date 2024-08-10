<?php
class ajaxvalid {
	function formValidate() 
	{
		include("db.php");
		$return = array();
		
		$id=$_POST['State'];
		$sql1="SELECT * FROM Cities WHERE StateID='$id'";
		$result =  mysqli_query($conn,$sql1) or die(mysqli_error($conn));
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0)
		{
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