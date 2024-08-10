<?php
	require_once 'db.php';
	session_start();

	$discountId = $_POST['discountId'];

	$discSql = "SELECT * FROM ";
	if ($_SESSION['user_role'] == 1) {
		$discSql .= "Discounts d, productdetails pd WHERE pd.CategoryID = d.CategoryID AND d.DiscountID = '$discountId'";
	} else {
		$discSql .= "Discounts WHERE DiscountID = '$discountId'";
	}
	$discounts = mysqli_query($conn, $discSql) or die(mysqli_error($conn));
	while ($discount = mysqli_fetch_assoc($discounts)) {
		$sql = "UPDATE Cart SET ";
		if ($_SESSION['user_role'] == 1) {
			$sql .= "Discount = '$discountId' WHERE ProductID = '{$discount['ProductID']}' AND UserID = '{$_SESSION['userid']}'";
		} else {
			$sql .= "Discount = '$discountId' WHERE UserID = '{$_SESSION['userid']}'";
			
		}
		
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	}

	echo json_encode(
		array(
			'status' => true,
			'message' => "",
		)
	);
?>