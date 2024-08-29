<?php
	session_start();

	include('db.php');

	$query="SELECT PD.*,BC.Category as brand,BSC.SubCategoryID as subcategory_id, BSC.SubCategory as product_name,BM.Model,(SELECT ImageName FROM productimages WHERE ProductID=PD.ProductID LIMIT 1) as image FROM productdetails PD LEFT JOIN BrandCategory BC ON PD.CategoryID=BC.CategoryID LEFT JOIN BrandSubCategory BSC ON PD.SubCategoryID=BSC.SubCategoryID LEFT JOIN BrandModel BM ON PD.ModelID=BM.ModelID WHERE PD.ProductID=".$_GET['id'];
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);
	$id=$productid=$row['ProductID'];
	$date=$row['AddedDate'];
	$Category=$row['brand'];
	$SubCategory=$row['product_name'];   
	$Model=$row['Model'];
	$Model_No=$row['Model_No'];
	$Product=$row['ProductNumber'];
	$watt=$row['Watts'];
	$driver=$row['Driver'];
	$size=$row['Size'];
	$led=$row['LEDCount'];
	$weight=$row['Weight'];
	$hsn=$row['HSNCode'];
	$gst=$row['GSTPercent'];
	$maxprice=$row['maxamt'];
	$price=$row['BtoCPrice'];
	$price_200=$row['BtoBPrice1'];
	$price_1000=$row['BtoBPrice2'];
	$price_more1000=$row['BtoBPrice3'];
	$pdf = $row['ProductPDF'];
	$video = $row['ProductVideo'];
	$thickness = $row['Thickness'];
	$category_id=$row['CategoryID'];
	$model_id=$row['ModelID'];

	$subcategory_id=$row['subcategory_id'];
	if($_SESSION['user_role'] == 1){
		$price = $price_200;
	}
	$image=(!empty($row['image']))?$row['image']:'default_product.png';
	$video=$row['ProductVideo'];
	$pdf=$row['ProductPDF']; 
	$color=$row['ProductColorID']; 
	$product_description=$row['ProductDescription'];
	$stock = $row['TotalStock'];
	
	$tprice = $maxprice - $price;
	$disper = $tprice * 100 / $maxprice;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Product Details Ramdev PCB</title>
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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
    .inline-group {
  max-width: 9rem;
  padding: .5rem;
}

.inline-group .form-control {
  text-align: right;
}

.form-control[type="number"]::-webkit-inner-spin-button,
.form-control[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.mobqty{
    max-width:40%;
    padding-left:0px;
}
@media only screen and (max-width:600px){
    .mobqty{
        padding-left:0px;
        max-width:60%;
    }
}

[data-tooltip]:before {
    /* needed - do not touch */
    content: attr(data-tooltip);
    position: absolute;
    opacity: 0;
    
    /* customizable */
    transition: all 0.15s ease;
    padding: 10px;
    color: #fff;
    border-radius: 10px;
    box-shadow: 2px 2px 1px silver;    
}

[data-tooltip]:hover:before {
    /* needed - do not touch */
    opacity: 1;
    
    /* customizable */
    background: #046963;
    margin-top: -50px;
    margin-left: 20px;    
}

[data-tooltip]:not([data-tooltip-persistent]):before {
    pointer-events: none;
}

</style>
	</head>
	<body>
	    
		<!-- Quick view -->
		<?php include("header.php"); ?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> Product
						<span></span> <?php echo $Product; ?>
					</div>
				</div>
			</div>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="product-detail accordion-detail">
								<div class="row mb-50">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="detail-gallery">
											<span class="zoom-icon"><i class="fi-rs-search"></i></span>
											<!-- MAIN SLIDES -->
											<div class="product-image-slider">
												<?php 
													$query = "SELECT * FROM productimages WHERE ProductID=".$_GET['id'];
													$result = mysqli_query($conn,$query);
													while ($row=mysqli_fetch_assoc($result)) {
												?>
												<figure class="border-radius-10" style="background:white;">
													<img src="<?php echo $row['ImageName'] ?>" alt="product image" />
												</figure>
												<?php
													}
												?>
											</div>
											<!-- THUMBNAILS -->
											<div class="slider-nav-thumbnails pl-15 pr-15">
												<?php 
													$query = "SELECT * FROM productimages WHERE ProductID=".$_GET['id'];
													$result = mysqli_query($conn,$query);
													while ($row=mysqli_fetch_assoc($result)) {
												?>
												<div style="background:white">
													<img src="<?php echo $row['ImageName'] ?>" alt="product image">
												</div>
												<?php
													}
												?>
											</div>
										</div>
										<!-- End Gallery -->
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="detail-info">
											<h2 class="title-detail" style="font-size: 26px;"><?php echo ucwords(strtolower($Model)).' '.$driver.' ('.$watt.')' ?></h2>
											<div class="product-detail-rating">
												<div class="pro-details-brand">
													<span> Brands: <a style="color:#b09707">Ramdev PCB</a></span>
												</div>
												<!--<div class="product-rate-cover text-end">
													<div class="product-rate d-inline-block">
														<div class="product-rating" style="width:90%"></div>
													</div>
													<span class="font-small ml-5 text-muted"> (25 reviews)</span>
												</div>-->
											</div>
											<div class="clearfix product-price-cover">
												<div class="product-price primary-color float-left">
													<ins><span class="text-brand" id="product_price">&#8377;<?= $price ?></span><sub style="font-size: 12px;padding: 5px;">+<?= $gst ?>% GST</sub></ins>
													<ins><span class="old-price font-md ml-15">&#8377;<?= $maxprice ?></span></ins>
													<span class="save-price  font-md color3 ml-15"><?= $disper ?>% Off</span> 
												</div>
											</div>
											<div class="bt-1 border-color-1 mt-15 mb-15"></div>
											<div class="short-desc mb-30">
												<?= $product_description;?>
											</div>
											<div class="product_sort_info font-xs mb-30">
												<ul>
													<li class="mb-10"><i class="fi-rs-crown mr-5" style="color:#b09707"></i> Get GST Invoice</li>
													<li class="mb-10"><i class="fi-rs-refresh mr-5" style="color:#b09707"></i> 100% Genuine | Quality Products</li>
													<li><i class="fi-rs-check mr-5" style="color:#b09707"></i> Transport | Courier | Self Pickup Available</li>
												</ul>
											</div>
											<?php
												$sql = "select B.ColorName,B.ColorCode,A.ProductID from productdetails A inner join ProductColors B on A.ProductColorID=B.ColorID where A.CategoryID='".$category_id."' and A.SubCategoryID='".$subcategory_id."' and A.ModelID='".$model_id."' and A.ProductNumber='".$Product."'";
											
											?>
											
											
											<div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Color</strong>
                                            <ul class="list-filter color-filter">
													<?php
														$result2 = mysqli_query($conn,$sql);
														while($row2 = mysqli_fetch_assoc($result2)) {
														    $colorname=$row2['ColorName'];
														    $colorcode=$row2['ColorCode'];
															if ($row2['ProductID'] == $_GET['id']) {
																$class_select='active';
															} else {
																$class_select='';
															}
													?>
													<li class="<?php echo $class_select; ?>">
														<a href="Product_Details.php?id=<?= $row2['ProductID'] ?>" class="color_code" data-product_id="<?= $row2['ProductID'] ?>" data-product_number="<?= $Product ?>" data-product_price1="<?= $row2['BtoCPrice'] ?>" data-product_price2="<?= $row2['BtoBPrice1'] ?>" data-product_price3="<?= $row2['BtoBPrice2'] ?>" data-product_price4="<?= $row2['BtoBPrice3'] ?>" ><span style="background-color:<?= $colorcode; ?>;color:#000000;border: 1px solid #ddd;" data-tooltip="<?= $colorname ?>" data-tooltip-persistent="foo"></span> </a>
													</li>
													<?php
														}
													?>
												</ul>
											</div>
											<div class="bt-1 border-color-1 mt-30 mb-30"></div>
											<?php //if($stock > 0){ ?>
											<div class="input-group inline-group mobqty">
											    <strong class="mr-10" style="margin-top: 1%;">Quantity</strong>
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary btn-minus" style="padding:4px 12px">
      <i class="fa fa-minus"></i>
    </button>
  </div>
  <input class="form-control quantity" min="1" name="quantity" id="quantity" value="1" type="number" style="text-align:center;height:32px;padding:0px;font-weight:bold">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary btn-plus" style="padding:4px 12px">
      <i class="fa fa-plus"></i>
    </button>
  </div>
</div>
<div class="bt-1 border-color-1 mt-30 mb-30"></div>
<div class="detail-extralink">
	<div class="product-extra-link2">
		<button type="button" id="add-cart" class="button button-add-to-cart">Add to cart</button>
	</div>
</div>
<script>
    $('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})
</script>
										<?php //} ?>
											<ul class="product-meta font-xs color-grey mt-50">
												<li class="mb-5">MODEL NO : <a href="#" style="color:#046963"><?= $Model_No ?></a></li>
												<li class="mb-5">Tags: <a href="Products.php?SubCategory=<?= $SubCategory ?>" rel="tag" style="color:"><?= ucwords(strtolower($SubCategory)) ?></a></li>
												<li>Availability: <span class="in-stock text-success ml-5" style="color:#17ad29!important"><strong>In Stock</strong></span></li>
											</ul>
										</div>
										<!-- Detail Info -->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-10 m-auto entry-main-content">
										<h2 class="section-title style-1 mb-30">Description</h2>
										<div class="description mb-50">
											<?php echo $product_description;?>
										</div>
										<h3 class="section-title style-1 mb-30">Additional info</h3>
										<table class="font-md mb-30">
											<tbody>
												<tr class="stand-up" style="background:#f7f4f4b3">
													<th>Model Number</th>
													<td>
														<p><?php echo $Model_No; ?></p>
													</td>
												</tr>
												<tr class="stand-up">
													<th>Product Number</th>
													<td>
														<p><?php echo $Product; ?></p>
													</td>
												</tr>
												<tr class="stand-up" style="background:#f7f4f4b3">
													<th>WATTS</th>
													<td>
														<p><?php echo $watt; ?></p>
													</td>
												</tr>
												<tr class="stand-up">
													<th>Driver</th>
													<td>
														<p><?php echo $driver; ?></p>
													</td>
												</tr>
												<tr class="stand-up" style="background:#f7f4f4b3">
													<th>Size</th>
													<td>
														<p><?php echo $size; ?></p>
													</td>
												</tr>
												<tr class="stand-up">
													<th>Thickness</th>
													<td>
														<p><?php echo $thickness; ?></p>
													</td>
												</tr>
												<tr class="stand-up" style="background:#f7f4f4b3">
													<th>Number of LED's</th>
													<td>
														<p><?php echo $led; ?></p>
													</td>
												</tr>
												<?php
													if (!empty($pdf)) {
												?>
												<tr class="stand-up">
													<th>Product PDF</th>
													<td>
														<p>
															<a href="https://admin.ramdevpcb.com/assets/images/product_pdf/<?= $pdf ?>" target="_blank">
																<img src="assets/imgs/pdficon.png" alt="" height="50px" width="50px" />
															</a>
														</p>
													</td>
												</tr>
												<?php
													}
												?>
												
											</tbody>
										</table>
										<h3 class="section-title style-1 mb-30">Video</h3>
										<div><?= $video ?></div>
									</div>
								</div>
								<input type="hidden" id="BtoBPrice1" value="<?= $price_200 ?>">
								<input type="hidden" id="BtoBPrice2" value="<?= $price_1000 ?>">
								<input type="hidden" id="BtoBPrice3" value="<?= $price_more1000 ?>">
								<input type="hidden" id="actual_product_price" value="<?= $price ?>">
								<input type="hidden" id="product_id" value="<?= $_GET['id'] ?>">
								<input type="hidden" id="product_number" value="<?= $Product ?>">
								<div class="row mt-60">
								    <div class="row">
								        <h3 class="section-title style-1 mb-30">Why Choose Us</h3>
								        <div class="col-lg-8 m-auto entry-main-content"> <img src="assets/imgs/features.jpg"> </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php include('footer.php') ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
		<script src="assets/js/plugins/jquery.elevatezoom.js"></script>
		<!-- Template  JS -->
		<script src="./assets/js/main.js?v=3.3"></script>
		<script src="./assets/js/shop.js?v=3.3"></script>
		<script>
			$('.color_code').click(function(){
				console.log($(this).attr('data-product_price1'));
				window.location.href = "Product_Details.php?id=" + $(this).attr('data-product_id');
				/*var product_id = $(this).attr('data-product_id');
				var product_number = $(this).attr('data-product_number');
				var price1 = $(this).attr('data-product_price1');
				var price2 = $(this).attr('data-product_price2');
				var price3 = $(this).attr('data-product_price3');
				var price4 = $(this).attr('data-product_price4');

				var user_type = "<?= $_SESSION['user_role'] ?>";
				if(user_type == 1){
					$('#product_price').html('&#8377;'+price2);
				}else{
					$('#product_price').html('&#8377;'+price1);
				}
				$('#BtoBPrice1').val(price2);
				$('#BtoBPrice2').val(price3);
				$('#BtoBPrice3').val(price4);
				$('#product_id').val(product_id);
				$('#product_number').val(product_number);*/
			});

			$('#add-cart').click(function(e) {
				e.preventDefault();
				addtocartclick();
			});

			function addtocartclick() {
				var ses = "<?= $_SESSION['use']?>";
				var custid = "<?= $_SESSION['userid']?>";
				if (ses == "") {
					alert("Please Login before Adding products");
					window.location.href = 'page-login-register.php';
				}
				else {
					var productid = $('#product_id').val();
					var productno = $('#product_number').val();
					var price = $('#actual_product_price').val();
					var qty = document.getElementById('quantity').value;
					var colorid = "<?php echo $color; ?>";
					$.ajax({
						type: "POST",
						url: "addtocart.php",
						data: {productid: productid,productno : productno,qty:qty,custid:custid,price:price,colorid:colorid} 
					}).done(function(data){
						alert("Item Added in Cart");
						location.reload();
					});
				}
			};

		$('#quantity').change(function(){
			var user_type = "<?php echo $_SESSION['user_role']; ?>";
			var BtoBPrice1 = $('#BtoBPrice1').val();
			var BtoBPrice2 = $('#BtoBPrice2').val();
			var BtoBPrice3 = $('#BtoBPrice3').val();
			if(user_type ==  1){
				var qty = $(this).val();
				console.log('===>'+qty);
				if(qty <= 99){
					var actual_price = BtoBPrice1;
				}else if(qty > 99 && qty <= 499){
					var actual_price = BtoBPrice2;
				}else if(qty > 499){
					var actual_price = BtoBPrice3;
				}else{
					var actual_price = BtoBPrice1;
				}
				$('#product_price').html('&#8377;'+actual_price);
				$('#actual_product_price').val(actual_price);
			}

		})  

		$('#quantity').keyup(function(){
			var user_type = "<?php echo $_SESSION['user_role']; ?>";
			var BtoBPrice1 = $('#BtoBPrice1').val();
			var BtoBPrice2 = $('#BtoBPrice2').val();
			var BtoBPrice3 = $('#BtoBPrice3').val();
			if(user_type ==  1){
				var qty = $(this).val();
				console.log('===>'+qty);
				if(qty <= 99){
					var actual_price = BtoBPrice1;
				}else if(qty >99 && qty <= 499){
					var actual_price = BtoBPrice2;
				}else if(qty > 499){
					var actual_price = BtoBPrice3;
				}else{
					var actual_price = BtoBPrice1;
				}
				$('#product_price').html('&#8377;'+actual_price);
				$('#actual_product_price').val(actual_price);
			}
		})
		</script>
	</body>
</html>