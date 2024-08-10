<?php
	class ajaxvalid {
		function formValidate() 
		{
			date_default_timezone_set('Asia/Kolkata');
			include("db.php");
			$return = array();
			
			$userId=$_POST['id'];
			$orderAmount=$_POST['total'];
			$billing_address=$_POST['billing_address'];
			$shipping_address=$_POST['shipping_address'];
			$delivery_option=$_POST['delivery_option'];
			$payment_type=$_POST['payment_type'];
			$paymentId=$_POST['paymentId'];
			$orderNumber = "RAMDEVPCB" . date("ymd") . rand(0000, 9999);
			$orderDate = date('y-m-d h:i:s');
			$transportType = $_POST['transportType'];
			$transportPrice = $_POST['transportPrice'];
			
			$sql = "INSERT INTO Orders(OrderNumber, OrderDate, UserID, TransactionID, OrderStatusID, PaymentOption, DeliveryOption, BillingAddressID, ShippingAddressID, OrderAmount, TransportType, TransportPrice, OrderMode)
			VALUES('$orderNumber', '$orderDate', '$userId', '$paymentId', '1', '$payment_type', '$delivery_option','$billing_address','$shipping_address', '$orderAmount', '$transportType', '$transportPrice', 'Online')";
			
			$result =  mysqli_query($conn,$sql);
			$id = $conn->insert_id;

			$result2 = mysqli_query($conn, "SELECT * FROM Cart WHERE UserID = '$userId'") or die(mysqli_error($conn));
			while ($row = mysqli_fetch_assoc($result2)) {
				$sql = "INSERT INTO OrderItems(OrderID, ProductID, ColorID, ProductQuantity, ProductAmount, Discount, AddedDate)
					VALUES('$id', '" . $row['ProductID'] . "', '" . $row['ColorID'] . "', '" . $row['ProductQuantity'] . "', '" . $row['ProductPrice'] . "', '{$row['Discount']}', '" . $row['AddedDate'] . "')";

				$result3 = $conn->query($sql);

				$productId = $row['ProductID'];
				$result4 = mysqli_query($conn, "SELECT * FROM productdetails WHERE ProductID = '$productId'") or die(mysqli_error($conn));
				$row1 = mysqli_fetch_assoc($result4);
				$rdno = $row1['ProductNumber'];
				$newStock = $row1['TotalStock'] - $row['ProductQuantity'];
				$result5 = mysqli_query($conn, "UPDATE productdetails SET TotalStock = '$newStock' WHERE ProductNumber = '$rdno'") or die(mysqli_error($conn));
			}

			$user = mysqli_query($conn, "SELECT * FROM Users WHERE UserID = '$userId'") or die(mysqli_error($conn));
			$users = mysqli_fetch_assoc($user);

			$toemail = $users['UserEmailId'];
			$username = $users['UserFullName'];
			$usernum = $users['UserMobileNumber'];
			$sendmail = "orderconfirm";
			include("email.php");
			
			
			echo '<script>
			var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // Typical action to be performed when the document is ready:
                                var response = xhttp.responseText;
                                console.log("ok"+response);
                            }
                            xhttp.open("GET", "https://49.50.67.32/smsapi/httpapi.jsp?username=ramdev&password=Ramdev@2022&from=RDPCBS&to='.$username.'&text=Hello '.$usernum.', your order id '.$orderNumber.' is delivered successfully. We sincerely appreciate your business and hope you come back soon!&coding=0&pe_id=1501713720000051526&template_id=1507166262252498384&flash=2", true);
                            xhttp.send();
			</script>';
			echo '<script src="admin.ramdevpcb.com/sms.js"></script>
			<script>sendmsg('.$username.','.$orderNumber.','.$usernum.',no,'.$sendmail.');</script>';
			/*$subject = "Order Confirmation";
			$from = "info@ramdevpcb.com";
			$header = "From:$from\r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$message = "Order # $orderNumber
			Hello,
			Thank you for your order. We'll send a confirmation when your order ships.";
			mail($to, $subject, $message, $header);*/

			$result6 = mysqli_query($conn, "DELETE FROM Cart WHERE UserID = '$userId'") or die(mysqli_error($conn));
			
			return json_encode($return);
		}

	}
	$ajaxvalid1 = new ajaxvalid;
	echo $ajaxvalid1->formValidate();
?>