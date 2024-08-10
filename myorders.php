<?php
	session_start();
	include('db.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Orders</title>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="">
		<meta property="og:type" content="">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/main.css?v=3.3">
		<style>
			a:hover{
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<?php include("header.php"); ?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.html" rel="nofollow">Home</a><span></span> Shop<span></span> Your Orders</div>
				</div>
			</div>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="table-responsive">
								<table class="table shopping-summery text-center clean">
									<thead>
										<tr class="main-heading">
											<th scope="col">Sr. No.</th>
											<th scope="col">Order Number</th>
											<th scope="col">Order Date</th>
											<th scope="col">Total Amount</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$id = $_SESSION['userid'];
											$query1 = "SELECT * FROM Orders WHERE UserID = $id ORDER BY OrderID DESC";
											$result=mysqli_query($conn, $query1);
											$i=1;
											while ($row=mysqli_fetch_array($result)) {
												$order_id = $row['OrderID'];
												$id=$row['OrderNumber'];
												$date=$row['OrderDate'];
												$OrderAmount=$row['OrderAmount'];
										?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?= $id ?></td>
												<td><?= $date ?></td>
												<td>&#8377; <?= $OrderAmount ?></td>
												<td>
													<a href="myorderdetails.php?order_id=<?= $order_id ?>" class="btn btn-primary btn-sm">View</a>
												</td>
											</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
							<!--<div class="cart-action text-end">
								<a class="btn  mr-10 mb-sm-15" href="Products.php"><i class="fi-rs-shopping-bag mr-10"></i>View More Product</a>
								<a class="btn" href="shopcart.php"><i class="fi-rs-shopping-bag mr-10"></i>View Cart</a>
							</div>-->
							<div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php
			include("footer.php");
		?>
		<!-- Preloader Start -->
		<div id="preloader-active">
			<div class="preloader d-flex align-items-center justify-content-center">
				<div class="preloader-inner position-relative">
					<div class="text-center">
						<h5 class="mb-5">Ramdev PCB</h5>
						<div class="loader">
							<div class="bar bar1"></div>
							<div class="bar bar2"></div>
							<div class="bar bar3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Vendor JS-->
		<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
		<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
		<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
		<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
		<script src="assets/js/plugins/slick.js"></script>
		<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
		<script src="assets/js/plugins/wow.js"></script>
		<script src="assets/js/plugins/jquery-ui.js"></script>
		<script src="assets/js/plugins/perfect-scrollbar.js"></script>
		<script src="assets/js/plugins/magnific-popup.js"></script>
		<script src="assets/js/plugins/select2.min.js"></script>
		<script src="assets/js/plugins/waypoints.js"></script>
		<script src="assets/js/plugins/counterup.js"></script>
		<script src="assets/js/plugins/jquery.countdown.min.js"></script>
		<script src="assets/js/plugins/images-loaded.js"></script>
		<script src="assets/js/plugins/isotope.js"></script>
		<script src="assets/js/plugins/scrollup.js"></script>
		<script src="assets/js/plugins/jquery.vticker-min.js"></script>
		<!-- Template  JS -->
		<script src="./assets/js/main.js?v=3.3"></script>
		<script src="./assets/js/shop.js?v=3.3"></script>
		<script>
			function updateqty(id){
				var client = "<?php echo $_SESSION['userid'] ?>";
				var qty = document.getElementById('quantity'+id).value;
				var price = document.getElementById('price'+id).value;
				var subtotal = qty * price;
				$.ajax({
					type: "POST",
					url: "updateqty.php",
					data: { id:id,qty:qty,price:price,subtotal:subtotal,client:client} 
				}).done(function(data){
					document.getElementById('subtotal'+id).value = subtotal;
					document.getElementById('totalprice'+id).innerHTML ='&#8377;'+ subtotal;
					var response = $.parseJSON(data);
					console.log(response);
					document.getElementById('total').innerHTML = response[0].total;
				});
			};
			
			function deletethis(id){
				if (confirm('Do you want to remove product?') == true) {
					$.ajax({
						type: "POST",
						url: "deleteproduct.php",
						data: { id:id} 
					}).done(function(data){
						location.reload();
					});
				}
			};
			
			function placeorder(id){
				var total =  document.getElementById('total').innerHTML;
				$.ajax({
					type: "POST",
					url: "placeorder.php",
					data: { id:id,total:total} 
				}).done(function(data){
					alert("Thank you for Placing Order,We have received your Order Request Successfully. Our team is still working on Online Payments ");
					location.reload();
				});
			}
		</script>
	</body>
</html>