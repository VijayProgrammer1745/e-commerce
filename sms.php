<?php
	// Account details
	$apiKey = 'NDYzMjUzNmEzNTZiNDkzOTQ0Mzc0NTRiMzQ3ODMxNjI=';
	
	// Message details
	$numbers = '919049523991';
	$sender = 'DNAIPL';
	$message = '1234 is OTP for online usage of Redeem. This can be used once only. DO NOT SHARE OTP AND CARD ETC DETAILS WITH ANYONE Regards DNAINFOTEL';
 
	$numberss = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/?apiKey='.$apikey.'&sender='.$sender.'&numbers='.$numbers.'&message='.$message);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>