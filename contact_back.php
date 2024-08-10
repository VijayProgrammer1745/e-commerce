
<?php

include('db.php');


ob_start(); 
extract($_POST);

if (isset($_POST['send'])) {
	
	    
	date_default_timezone_set('Asia/Kolkata');
	    
	$pass = "insert into enquiry ( Date,name,email,phone,subject,message,cstatus) values 
	('".date('d-m-Y H:i:s')."','$name','$email','$phone','$subject','$message','1')";


	$query = mysqli_query($conn,$pass);
	
	echo "<script type='text/javascript'>window.location.href = 'contact.php';alert('Thank you For Writing Us, Our team will look into your concern');</script>";
    exit();
	
}
?>