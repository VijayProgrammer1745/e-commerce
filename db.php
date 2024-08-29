<?php
	//$con=mysqli_connect('116.206.105.139','ramdehfj_ramdevpcb','ramdev@2022','ramdehfj_RAMDEVPCB')or die("Oops some thing went wrong..."); 

	/*$mysql_hostname = "localhost";
	$mysql_user = "ramdehfj_pcbpanel";
	$mysql_password = "ramdevpcb@123"; 
	$mysql_database = "ramdehfj_pcb";*/

	$mysql_hostname = "localhost";
	$mysql_user = "creatsjs_ramdevrcb";
	$mysql_password = 'j-yK$Kt23v4R'; 
	$mysql_database = "creatsjs_pcb_ramdev";

	$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

	if ($conn->connect_error) {
		// echo "Noo";
		// exit;
	} else {
		// echo "Connection Successful";
		// exit;
	}
?>