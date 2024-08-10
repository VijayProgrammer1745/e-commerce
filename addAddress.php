<?php
	include('db.php');
	session_start();   // session starts with the help of this function 
	$query = "SELECT * FROM Users WHERE UserID=".$_SESSION['userid'];
	$result = mysqli_query($conn,$query);
	$user_details = mysqli_fetch_assoc($result);
	$user_id = $_SESSION['userid'];
	$fullname = $_POST['fullname'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$city =  $_POST['city'];
	$pass = "INSERT INTO AddressDetails ( UserID,Name,PhoneNo,AddressLine1,AddressLine2,PinCode,StateID,CityID,AddedDate) values
			('$user_id','$fullname','$mobile','$address1','$address2','$pincode','$state','$city','".date('d-m-Y H:i:s')."')";
	$query = mysqli_query($conn,$pass);

	echo json_encode(
		array(
			'status' => true,
			'message' => 'Address added successfully!'
		)
	);
?>