<?php
	require_once('db.php');

	$cartId = $_POST['cartId'];
	$discountId = $_POST['discountId'];

	$result = mysqli_query($conn, "UPDATE Cart SET Discount = 0 WHERE CartID = '$cartId' AND Discount = '$discountId'") or die(mysqli_error($conn));

	echo json_encode(
		array(
			'status' => true,
			'message' => 'Coupon removed',
		),
	);
?>