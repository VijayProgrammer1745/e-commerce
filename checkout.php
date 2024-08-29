<?php
	session_start();
	include('db.php');
	$userId = $_SESSION['userid'];
	$users = mysqli_query($conn, "SELECT * FROM Users WHERE UserID = '{$userId}'") or die(mysqli_error($conn));
	$user = mysqli_fetch_assoc($users);
	$query1 = "SELECT * FROM BrandModel m, BrandCategory c, BrandSubCategory sc, Cart ca, productdetails pd, ProductColors co WHERE pd.ProductID = ca.ProductID AND m.ModelID = pd.ModelID AND c.CategoryID = pd.CategoryID AND co.ColorID = pd.ProductColorID AND sc.SubCategoryID = pd.SubCategoryID AND ca.UserID = '$userId'";
	$result = mysqli_query($conn, $query1) or die(mysqli_error($conn));
	$subtotal_price = 0;
	$gst_total = 0;
	$isCouponApplied = false;
	$discountPercent = 0;
	$weight = 0;
	while ($row = mysqli_fetch_array($result)) {
		$productWeight = explode($row['Weight'], 'GM');
		$weight += ($row['Weight'] * $row['ProductQuantity']);
		$images = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '{$row['ProductID']}'") or die(mysqli_error($conn));
		$img = mysqli_fetch_assoc($images);
		$image = (!empty($img['ImageName'])) ? $img['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.png';
		$price = $row['BtoCPrice'];
		$price_200 = $row['BtoBPrice1'];
		$price_1000 = $row['BtoBPrice2'];
		$price_more1000 = $row['BtoBPrice3'];
		if( $_SESSION['user_role'] == 1) {
			if ($row['ProductQuantity'] <= 100) {
				$price = $price_200;
			} else if ($row['ProductQuantity'] > 100 && $row['ProductQuantity'] <= 1000) {
				$price = $price_1000;
			} else if ($row['ProductQuantity'] > 1000) {
				$price = $price_more1000;
			} else {
				$price = $price;
			}
		}
		$discount = mysqli_query($conn, "SELECT * FROM Discounts WHERE DiscountID = '{$row['Discount']}'") or die(mysqli_error($conn));
		$disc = mysqli_fetch_assoc($discount);
		if (mysqli_num_rows($discount) > 0) {
			$price = ($price - ($price * ($disc['DiscountPercent'] / 100)));
			$isCouponApplied = true;
		}
		$gst_total += (($price * $row['ProductQuantity']) * ($row['GSTPercent'] / 100));
		$subtotal_price += ($price * $row['ProductQuantity']);
	}

	$payable = ($gst_total + $subtotal_price);

	/*echo number_format($payable, 2);
	exit();*/
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>shop</title>
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
		<link rel="stylesheet" href="assets/css/custom.css">
		
		<style>
			a:hover{
				cursor: pointer;
			}
			.address_list {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 2px solid #ccc;
			box-sizing: border-box;
		}
		/* set a style for all buttons*/
		button {
			background-color: green;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			cursor: pointer;
			width: 100%;
		}
		/*set styles for the cancel button*/
		.cancelbtn {
			padding: 12px 20px;
			background-color: #FF2E00;
			border: 1px solid #046963;
			border-radius: 4px;   
		}
		/*float cancel and signup buttons and add an equal width*/
		.cancelbtn,
		.signupbtn {
			float: left;
			width: 50%
		}
		/*add padding to container elements*/
		.container {
			padding: 16px;
		}
		/*define the modal’s background*/
		
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.4);
			padding-top: 60px;
		}
		/*define the modal-content background*/
		
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto;
			border: 1px solid #888;
			width: 80%;
		}
		/*define the close button*/
		
		.close {
			position: absolute;
			right: 35px;
			top: 15px;
			color: #000;
			font-size: 40px;
			font-weight: bold;
		}
		/*define the close hover and focus effects*/
		
		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}
		
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		
		@media screen and (max-width: 300px) {
			.cancelbtn,
			.signupbtn {
				width: 100%;
			}
		}
		</style>
	</head>
	<body>
		<?php include("header.php"); ?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb"><a href="index.html" rel="nofollow">Home</a><span></span> Shop<span></span> Your Cart</div>
				</div>
			</div>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="col-sm-12 col-md-6">
								<form method="post" action="placeorder.php">
									<div class="col-12">
										<label for="">Payable Amount</label>
										<input type="text" id="price" value="<?= $payable ?>" readonly />
									</div>
									<div class="col-12">
										<label for="">Total weight</label>
										<input type="text" id="weight" value="<?= $weight ?> GM" readonly />
									</div>
									<div class="col-12">
										<?php
											/*if ($isCouponApplied) {
												$subtotal_price = ($subtotal_price - ($subtotal_price * ($discountPercent / 100)));
											}*/
										?>
										<label for="">Shipping Address</label>
										<select id="shipping_address" class="address_list">
											<?php
												$ship = mysqli_query($conn, "SELECT * FROM AddressDetails ad, States s, Cities c WHERE s.StateID = ad.StateID AND c.CityID = ad.CityID AND ad.UserID = '$userId'") or die(mysqli_error($conn));
												while ($s = mysqli_fetch_assoc($ship)) {
											?>
											<option value="<?= $s['AddressID'] ?>" data-state_name="<?= $s['StateName'] ?>"><?= ($s['AddressLine1'] . ',' . $s['AddressLine2'] . ',' . $s['CityName'] . ',' . $s['PinCode'] . ',' . $s['StateName']) ?></option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="col-12">
										<label for="">Billing Address</label>
										<select id="billing_address" class="address_list">
											<?php
												$ship = mysqli_query($conn, "SELECT * FROM AddressDetails ad, States s, Cities c WHERE s.StateID = ad.StateID AND c.CityID = ad.CityID AND ad.UserID = '$userId'") or die(mysqli_error($conn));
												while ($s = mysqli_fetch_assoc($ship)) {
											?>
											<option value="<?= $s['AddressID'] ?>"><?= ($s['AddressLine1'] . ',' . $s['AddressLine2'] . ',' . $s['CityName'] . ',' . $s['PinCode'] . ',' . $s['StateName']) ?></option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="col-12">
										<a class="btn btn-primary mt-2" id="address_select">Add New Address</a>
									</div>
									<div class="col-12">
										<label for="">Delivery Option</label>
										<select name="delivery-type" id="delivery-type" class="address_list">
											<option value="Self Pickup">Self Pickup</option>
											<option value="Transport">Transport</option>
											<option value="Courier">Courier</option>
										</select>
									</div>
									<div class="col-12">
										<label for="">Transport Option</label>
										<select name="transport-type" id="transport-type" class="address_list">
											<option value="By Road">By Road</option>
											<option value="By Air">By Air</option>
										</select>
									</div>
									<div class="col-12">
										<label for="">Total Payable Amount</label>
										<input type="text" id="total-payable" value="<?= $payable ?>" readonly />
									</div>
									<button type="button" onclick="placeorders(<?= $_SESSION['userid'] ?>);" class="cancelbtn">Proceed</button>
								</form>
							</div>
						</div>
						<div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
					</div>
				</div>
			</section>
		</main>
		<div id="id01" class="modal" style="position: fixed !important; z-index: 999; overflow: hidden;">
			<form id="address-form" class="modal-content animate" action="addAddress.php" style="display: flex;justify-content: center;width: 50%;">
				<div class="container">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
					<h2>Add Address</h2>
					<div class="form-group">
						<input type="text" required="" name="fullname" placeholder="Full Name">
					</div>
					<div class="form-group">
						<input type="text" required="" name="mobile" placeholder="Mobile number">
					</div>
					<div class="form-group">
					<input type="text" required="" name="address1" placeholder="Address 1">
					</div>
					<div class="form-group">
						<input type="text" required="" name="address2" placeholder="Address 2">
					</div>
					<div class="form-group">
						<input type="text" required="" name="pincode" placeholder="Pin Code">
					</div>
					<div class="form-group">
						<select class="form-group state"  name="state" style="padding-left:20px;background: #fff;border: 1px solid #e2e9e1;height: 45px;">
							<option selected>Select State</option>
							<?php
								$sql = mysqli_query($conn,"SELECT * FROM States where CountryID='101'");
								while ($state = mysqli_fetch_array($sql)) {
									$id = $state['StateID'];
									$StateName = $state['StateName'];
							?>
							<option value="<?= $id ?>"><?= $StateName ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<select name="city" id="City" style="padding-left:20px;background: #fff;border: 1px solid #e2e9e1;height: 45px;"></select>
					</div>
					<input type="hidden" name="type" value="2">
					<div class="form-group">
						<button type="submit" class="btn btn-fill-out btn-block hover-up" name="register">Update</button>
					</div>
				</div>
			</form>
		</div>
		<?php
			include("footer.php");
		?>
		<!-- Preloader Start -->
		<div id="preloader-active">
			<div class="preloader d-flex align-items-center justify-content-center">
				<div class="preloader-inner position-relative">
					<div class="text-center">
						<h5 class="mb-5">Now Loading</h5>
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
		<script src="assets/js/plugins/jquery.theia.sticky.js"></script>
		<!-- Template  JS -->
		<script src="./assets/js/main.js?v=3.3"></script>
		<script src="./assets/js/shop.js?v=3.3"></script>
		<script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js"></script>
		<script>
			$('#address_select').on('click',function(){
				document.getElementById("id01").style.display = "block";
			})
			function closeForm() {
				document.getElementById("id01").style.display = "none";
			}

			$(window).load(function () {
				changeTotalPayable();
				var pay = parseFloat($('#price').val());
				$('#price').val(pay.toFixed(2));
			});

			$('#delivery-type, #transport-type, #shipping_address').change(function () {
				changeTotalPayable();
			});

			var changeTotalPayable = function () {
				var payable = parseFloat($('#price').val());
				//var payable = $('#price').val();
				console.log(payable);
				var state = $('#shipping_address option:selected').data('state_name');
				console.log(state);
				var transportPrices = 0;
				if ($('#delivery-type').val() != 'Self Pickup') {
					if ($('#transport-type').val() == "By Road") {
						if (state == "Maharashtra") {
							transportPrices = 40 + (40 * (18/100));
						} else {
							transportPrices = 70 + (70 * (18/100));
						}
					} else {
						transportPrices = 130 + (130 * (18/100));
					}
				}
				var total = payable + transportPrices;
				$('#total-payable').val("" + total.toFixed(2));
			};

			$('#address-form').submit(function(e) {
				e.preventDefault();
				var $this = $(this), data = $this.serialize();
				$.ajax({
					type: 'POST',
					url: 'addAddress.php',
					data: data,
					dataType: 'json',
					success: function (d) {
						if (d.status) {
							alert(d.message);
							window.location.reload();
						}
					}
				});
			});

			$(document).ready(function(){
				$("select.state").change(function(){
					var selectedState = $(".state option:selected").val();
					$.ajax({
						type: "POST",
						url: "getcity.php",
						data: { State : selectedState } 
					}).done(function(data){
						var response = $.parseJSON(data);
						console.log(response);
						var output ="";
						var length = response.length;
						for(i=0;i<length;i++){
						output += '<option value=\"'+response[i].CityID+'\">'+response[i].CityName+'</option>';
						}
						$("#City").html(output);
					});
				});
			});
			
			function placeorders(user_id){
				var total =  parseFloat($('#price').val());
				var s_shipping_address = $('#shipping_address').val();
				var b_billing_address = $('#billing_address').val();
				var paymentType = $('#payment-type').val();
				var deliveryOption = $('#delivery-type').val();
				var transport = $('#transport-type').val();
				//var total = (total * 100);
				var state = $('#shipping_address option:selected').data('state_name');
				console.log("State Name " + state);
				var transportPrices = 0;
				if (deliveryOption != 'Self Pickup') {
					if (transport == "By Road") {
						if (state == "Maharashtra") {
							transportPrices = 40 + (40 * (18/100));
						} else {
							transportPrices = 70 + (70 * (18/100));
						}
					} else {
						transportPrices = 130 + (130 * (18/100));
					}
				}
				total += transportPrices;
				console.log(total);
				//if (paymentType == "Online") {
					var razorpay = new Razorpay({
						key: 'rzp_test_CF1LhmZYWrDYpz',
						//key: 'rzp_live_8mfuvo6LmZruff',
						amount: (total * 100),
						currency: "INR",
						"handler": function (response) {
							$.ajax({
								type: "POST",
								url: "placeorder.php",
								data: {
									id: user_id,
									total: total,
									billing_address: b_billing_address,
									shipping_address: s_shipping_address,
									delivery_option: deliveryOption,
									payment_type: 'Online',
									paymentId: response.razorpay_payment_id,
									transportType: transport,
									transportPrice: transportPrices
								}
							}).done(function(data){
								alert("Thank you for Placing Order,We have received your Order Request Successfully. Our team is still working on Online Payments ");
								window.location.href = "myorders.php";
							});
						},
						"prefill": {
							"name": "<?= $user['UserFullName'] ?>",
							"email": "<?= $user['UserEmailId'] ?>",
							"contact": "<?= $user['UserMobileNumber'] ?>",
						}
					});
					razorpay.open();
					razorpay.on('payment.error', function (response) {
						alert(response.error.code);
						alert(response.error.description);
						alert(response.error.source);
						alert(response.error.step);
						alert(response.error.reason);
						alert(response.error.metadata.order_id);
						alert(response.error.metadata.payment_id);
					});
				/*} else {
					$.ajax({
						type: "POST",
						url: "placeorder.php",
						data: {
							id:id,
							total:total,
							billing_address:billing_address,
							shipping_address:shipping_address,
							delivery_option: deliveryOption,
							payment_type: paymentType,
							paymentId: ''
						}
					}).done(function(data){
						alert("Thank you for Placing Order,We have received your Order Request Successfully. Our team is still working on Online Payments ");
						window.location.href = "myorders.php";
					});
				}*/
			}
		</script>
	</body>
</html>