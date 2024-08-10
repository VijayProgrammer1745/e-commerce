<?php
	include('db.php');
	ob_start(); 
	extract($_POST);
	if (isset($_POST['submit'])) {
		date_default_timezone_set('Asia/Kolkata');
			
		$pass = "INSERT INTO Users ( UserFullName,UserEmailId,UserPassword,UserGSTNumber,UserAddress,StateID,CityID,UserMobileNumber,UserRole,RegisterDate) values 
		('$fullname','$email','$cpassword','$gst','$address','$state','$city','$mobile','$type','".date('d-m-Y H:i:s')."')";


		$query = mysqli_query($conn,$pass);
		if($query){
			$last_id = mysqli_insert_id($conn);
			session_start();
			$_SESSION['use']=$fullname;
			$_SESSION['userid']=$last_id;	
		}
		
		echo "<script type='text/javascript'>window.location.href = 'page-login-register.php';alert('Thank you For Joining Us, We will Notify you soon');</script>";
		exit;
	}
?>