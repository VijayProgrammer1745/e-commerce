<?php
	require_once('db.php');
	session_start();
	$userId = $_SESSION['userid'];

	$query1 = "SELECT * FROM BrandModel m, BrandCategory c, BrandSubCategory sc, Cart ca, productdetails pd, ProductColors co WHERE pd.ProductID = ca.ProductID AND m.ModelID = pd.ModelID AND c.CategoryID = pd.CategoryID AND co.ColorID = pd.ProductColorID AND sc.SubCategoryID = pd.SubCategoryID AND ca.UserID = '$userId'";
	$results = mysqli_query($conn, $query1) or die(mysqli_error($conn));
	$no = mysqli_num_rows($results);

	$discountedProductPrice = 0;
	$discountAmount = 0;
	$discountProductQuantity = 0;
	$discountCoupon = "";
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
		/*.container {
			padding: 16px;
		}*/
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
					<div class="breadcrumb"><a href="index.php" rel="nofollow">Home</a><span></span> Shop<span></span> Your Cart</div>
				</div>
			</div>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php if($no) { ?>
							<div class="table-responsive">
								<table class="table shopping-summery text-center clean">
									<thead>
										<tr class="main-heading">
											<th scope="col">Image</th>
											<th scope="col">Name</th>
											<th scope="col">Price</th>
											<th scope="col">Quantity</th>
											<th scope="col">Subtotal</th>
											<th scope="col">Remove</th>
										</tr>
									</thead>
									<tbody>
									<?php
										$subtotal_price = 0;
										$gst_total = 0;
										$isCouponApplied = false;
										$discountPercent = 0;
										$isCouponSelected = false;
										$cartId = 0;
										$discountId = 0;
										while($row = mysqli_fetch_array($results)) {
											$id = $row['CartID'];
											$images = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '{$row['ProductID']}'") or die(mysqli_error($conn));
											$img = mysqli_fetch_assoc($images);
											$image = (!empty($img['ImageName'])) ? $img['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
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
												//$price = ($price - ($price * ($disc['DiscountPercent'] / 100)));
												$discountCoupon = $disc['DiscountCoupon'];
												$discountAmount = $disc['DiscountPercent'] . " %";
												$discountedProductPrice = ($price * ($disc['DiscountPercent'] / 100)) * $row['ProductQuantity'];
												//echo $discountedProductPrice. "<br />";
												$discountProductQuantity = $row['ProductQuantity'];
												$isCouponApplied = true;
												$cartId = $row['CartID'];
												$discountId = $row['Discount'];
											} /*else {
												$price = ($price - ($price * ($disc['DiscountPercent'] / 100)));
												$isCouponApplied = true;
											}*/
											$gst = ((($price * $row['ProductQuantity']) - ($price * ($disc['DiscountPercent'] / 100)) * $row['ProductQuantity']) * ($row['GSTPercent'] / 100));
											$gst_total += $gst;
											$subtotal_price += $price * $row['ProductQuantity'];
										?>
										<tr>
											<td class="image product-thumbnail">
												<img src="<?= $image ?>" alt="#">
											</td>
											<td class="product-des product-name">
												<h5 class="product-name"><?= $row['Model'] ?></h5>
												<p class="font-xs"><?= $row['Watts'] . '-' . $row['Driver'] . '<br> ' . $row['Model_No'] ?></p>
											</td>
											<td class="price" data-title="Price"><span class="product_price">&#8377;<?= number_format($price, 2) ?></span></td>
											<td class="text-center" data-title="Stock">
												<div class="detail-qty border radius  m-auto"  style="padding:0px">
													<input type="number" id="quantity<?= $id ?>" min="1" onchange="updateqty('<?= $id ?>')" value="<?= $row['ProductQuantity'] ?>" />
													<input type="hidden" id="price<?= $id ?>" value="<?= $price ?>" />
													<input type="hidden" id="price<?= $id ?>_btob100" value="<?= $price_200 ?>" />
													<input type="hidden" id="price<?= $id ?>_btob1000" value="<?= $price_1000 ?>" />
													<input type="hidden" id="price<?= $id ?>_btobmore1000" value="<?= $price_more1000 ?>" />
													<input type="hidden" id="subtotal<?= $id ?>" value="<?= number_format(($price * $row['ProductQuantity']), 2) ?>" />
												</div>
											</td>
											<td class="text-right" data-title="Cart">
												<span id="totalprice<?= $row['CartID'] ?>">&#8377;<?= ($price * $row['ProductQuantity']) ?></span>
											</td>
											<td class="action" data-title="Remove"><a onclick="deletethis('<?= $row['CartID'] ?>')" class="text-muted"><i class="fi-rs-trash"></i></a></td>
										</tr>
										<?php
											}
										?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6" class="text-end">
												<div>Total : &#8377;<span id="total"><?= number_format($subtotal_price, 2) ?></span></div>
												<?php
													if ($isCouponApplied) {
														$subtotal_price -= $discountedProductPrice;
												?>
												<div>
													<span><?= $discountCoupon . "(" . $discountAmount . ")" ?></span>
													<span>- &#8377;<?= number_format($discountedProductPrice, 2) ?></span>
													<span title="Remove Coupon" class="coupon-remove" data-cart_id="<?= $cartId ?>" data-discount_id="<?= $discountId ?>">x</span>
												</div>
												<?php
													} else {
												?>
												<div class="coupon-btn-container">
													<a href="#" class="coupon-button" data-bs-toggle="modal" data-bs-target="#coupon-popup">Use Coupon</a>
												</div>
												<?php
													}
												?>
												<div>Tax : &#8377;<span id="gst_total"><?= number_format($gst_total, 2) ?></span></div>
												<div>Payable Amount : &#8377;<span id="pay-amount"><?= number_format(($subtotal_price + $gst_total), 2) ?></span></div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
							<div class="cart-action text-end" style="position: relative;">
								<a class="btn  mr-10 mb-sm-15" href="Products.php"><i class="fi-rs-shopping-bag mr-10"></i>Add More Product</a>
								<a class="btn" href="checkout.php"><i class="fi-rs-credit-card mr-10"></i>Checkout</a>
							</div>
							<div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
							<?php } else { ?>
							<div style="text-align:center">
								<p class="">
									<img src="assets/imgs/theme/cart.jpg" alt="" class="hover-up">
								</p>
								<h2 class="mb-30">Your Cart is Empty</h2>
								<p class="font-lg text-grey-700 mb-30">Looks like you have not added anything to your cart.<br> Go ahead & explore top categories.</p>
								<form class="contact-form-style text-center" id="contact-form" action="#" method="post">
									<a class="btn btn-default submit-auto-width font-xs hover-up" href="Products.php?id=all">View Products</a>
								</form>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php
			include("footer.php");
		?>
		<div id="coupon-popup" class="modal fade" tabindex="-1" aria-labelledby="coupon-popup-modal" aria-hidden="true" style="position: fixed !important; z-index: 2000; overflow: hidden;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="coupon-popup-modal">Coupons</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="coupon-container">
							<ul class="coupon-list">
								<?php
									$date = date('o-m-d');
									$sql = "SELECT * FROM ";
									if ($_SESSION['user_role'] == 1) {
										$sql .= "Discounts d, Cart c, productdetails pd WHERE d.DiscountID NOT IN (SELECT oi.Discount FROM OrderItems oi, Orders o WHERE o.OrderID = oi.OrderID AND o.UserID = '{$_SESSION['userid']}') AND d.CategoryID IN ({$_SESSION['SESS_USER_CATEGORY']}) AND c.ProductID = pd.ProductID AND d.CategoryID = pd.CategoryID AND ('{$date}' BETWEEN d.DiscountStartDate AND d.DiscountEndDate) AND d.DiscountFor = '1' AND d.UserID = '{$_SESSION['userid']}' GROUP BY d.DiscountCoupon ORDER BY d.DiscountID DESC";
									} else {
										$sql .= "Discounts d WHERE d.DiscountID NOT IN (SELECT oi.Discount FROM OrderItems oi, Orders o WHERE o.OrderID = oi.OrderID AND o.UserID = '{$_SESSION['userid']}') AND ('{$date}' BETWEEN d.DiscountStartDate AND d.DiscountEndDate) AND d.CategoryID = '0' AND d.UserID = '0' ORDER BY d.DiscountID DESC";
									}
									$couponList = mysqli_query($conn, $sql) or die(mysqli_error($conn));
									if (mysqli_num_rows($couponList) > 0) {
									while ($row = mysqli_fetch_assoc($couponList)) {
								?>
								<li>
									<a href="apply-coupon.php" class="discount" data-discount_id="<?= $row['DiscountID'] ?>">
										<span><?= $row['DiscountCoupon'] ?> <?= $row['DiscountPercent'] ?>%</span>
									</a>
								</li>
								<?php
										}
									} else {
								?>
								<li>
									<a href="">No Coupons found!!!</a>
								</li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
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
		<script src="./assets/js/custom.js"></script>
		<script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js"></script>
		<script>
			$(function() {
				$('.coupon-remove').click(function(e) {
					e.preventDefault();
					var cartId = $(this).data('cart_id');
					var discountId = $(this).data('discount_id');
					$.ajax({
						type: 'POST',
						url: 'remove-coupon.php',
						data: {
							cartId: cartId,
							discountId: discountId,
						},
						dataType: 'json',
						success: function(d) {
							if (d.status) {
								window.location.reload();
							}
						}
					});
				});
			});
			function updateqty(id) {
				var client = "<?= $_SESSION['userid'] ?>";
				var qty = document.getElementById('quantity'+id).value;
				var price = document.getElementById('price'+id).value;
				var price_100 = document.getElementById('price'+id+'_btob100').value;
				var price_1000 = document.getElementById('price'+id+'_btob1000').value;
				var price_more1000 = document.getElementById('price'+id+'_btobmore1000').value;
				var user_role = "<?= $_SESSION['user_role'] ?>";
				if (user_role ==  1) {
					if (qty <= 100) {
						var actual_price = price_100;
					} else if (qty > 100 && qty <= 1000) {
						var actual_price = price_1000;
					} else if (qty > 1000) {
						var actual_price = price_more1000;
					} else {
						var actual_price = price_100;
					}
					var price = actual_price;
				}
				$('#quantity'+id).parent().parent().parent().find('.product_price').html('&#8377;'+price)
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
					window.location.reload();
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
			
			function placeorders(id){
				var total =  document.getElementById('total').innerHTML;
				var shipping_address = $('#shipping_address').val();
				var billing_address = $('#billing_address').val();
				var razorpay = new Razorpay({
					key: 'rzp_test_xxctVCT8wsVBYK',
					amount: (total * 100),
					currency: "INR",
					"handler": function (response) {
						alert(response.razorpay_payment_id);
						alert(response.razorpay_order_id);
						alert(response.razorpay_signature);
						$.ajax({
							type: "POST",
							url: "placeorder.php",
							data: {id:id,total:total,billing_address:billing_address,shipping_address:shipping_address} 
						}).done(function(data){
							alert("Thank you for Placing Order,We have received your Order Request Successfully. Our team is still working on Online Payments ");
							window.location.href = "myorders.php";
						});
						/*$.ajax({
							type: 'POST',
							url: order_url,
							data: {
								orderNo: d.orderNo,
								razorpay_payment_id: response.razorpay_payment_id,
								addressId: d.addressId
							},
							dataType: 'json',
							success: function (s) {
								if (s.status) {
									alert(s.msg);
									window.location = s.url;
								}
							}
						});*/
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
			}
		</script>
	</body>
</html>