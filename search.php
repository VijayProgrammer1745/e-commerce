<?php
	require_once 'db.php';
	session_start();

	$q = $_GET['q'];

	$query = "SELECT * FROM BrandModel bm, BrandSubCategory sc, productdetails pd WHERE (pd.ProductNumber LIKE '%$q%' OR pd.Model_No LIKE '%$q%' OR sc.SubCategory LIKE '%$q%' OR pd.Watts LIKE '%$q%'";
	if (str_contains(strtolower($q), 'kam') || str_contains(strtolower($q), 'ma')) {
		$query .= " OR pd.Driver LIKE '%$q%'";
	}
	$query .= " OR pd.Model_No LIKE '%$q%') AND pd.SubCategoryID = sc.SubCategoryID";

	if (isset($_SESSION['userid'])) {
		$query .= " AND pd.CategoryID IN ({$_SESSION['SESS_USER_CATEGORY']})";
	}
	$query .= " AND bm.ModelID = pd.ModelID AND pd.is_deleted = '0' ORDER BY pd.ProductID DESC";

	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$data = "<ul>";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<li class=\"item\">
				<a href=\"Product_Details.php?id={$row['ProductID']}\">
					<div class=\"product-title\">{$row['Model']} {$row['Driver']} ({$row['Watts']})</div>
					<div class=\"sub-title\">RD No.: {$row['ProductNumber']} Model No.: {$row['Model_No']}</div>
				</a>
			</li>";
		}
	} else {
		$data .= "<li class=\"no-result\">No records found</li>";
	}
	$data .= "</ul>";

	echo json_encode(array(
		'status' => true,
		'data' => $data
	));
?>