<?php
	session_start();
	require_once('db.php');

	$userId = '';
	if (isset($_SESSION['userid'])) {
		$userId = $_SESSION['userid'];
	}

	$driver = '';
	if (isset($_GET['driver'])) {
		$driver = $_GET['driver'];
	}
	$watt = '';
	if (isset($_GET['watt'])) {
		$watt = $_GET['watt'];
	}

	$usr = mysqli_query($conn, "SELECT * FROM Users WHERE UserID = '$userId'") or die(mysqli_error($conn));
	$users = mysqli_fetch_assoc($usr);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Product Ramdev PCB</title>
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
		<link rel="stylesheet" href="assets/css/custom.css" />
		<style>
			@media only screen and (max-width:600px){
				.reduce{
					width:50%;
				}
				.fontt{
					font-size:10px!important;
				}
			}
			.collapsiblee {
				background-color:white;
				color: black;
				cursor: pointer;
				padding: 12px;
				width: 100%;
				border: none;
				text-align: left;
				outline: none;
				font-size: 15px;
				text-transform: uppercase;
			}
			.activee, .collapsiblee:hover {
				background-color: #b8860b!important;
				color:white;
			}
			.collapsiblee:after {
				content: '\002B';
				color: black;
				font-weight: bold;
				float: right;
				margin-left: 5px;
				margin-right: 5px;
			}
			.activee:after {
				content: "\2212";
				color:white;
			}
			.contente {
				text-align:center;
				padding: 0 6px;
				max-height: 0;
				overflow: hidden;
				transition: max-height 0.2s ease-out;
				background-color: #f1f1f1;
			}
		</style>
	</head>
	<body>
		<!-- Quick view -->
		<div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="detail-gallery">
									<span class="zoom-icon"><i class="fi-rs-search"></i></span>
									<!-- MAIN SLIDES -->
									<div class="product-image-slider">
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-2.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-1.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-3.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-4.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-5.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-6.jpg" alt="product image">
										</figure>
										<figure class="border-radius-10">
											<img src="assets/imgs/shop/product-16-7.jpg" alt="product image">
										</figure>
									</div>
									<!-- THUMBNAILS -->
									<div class="slider-nav-thumbnails pl-15 pr-15">
										<div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
										<div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
									</div>
								</div>
								<!-- End Gallery -->
								<div class="social-icons single-share">
									<ul class="text-grey-5 d-inline-block">
										<li><strong class="mr-10">Share this:</strong></li>
										<li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
										<li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
										<li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
										<li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="detail-info">
									<h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
									<div class="product-detail-rating">
										<div class="pro-details-brand">
											<span> Brands: <a href="#">Bootstrap</a></span>
										</div>
										<div class="product-rate-cover text-end">
											<div class="product-rate d-inline-block">
												<div class="product-rating" style="width:90%">
												</div>
											</div>
											<span class="font-small ml-5 text-muted"> (25 reviews)</span>
										</div>
									</div>
									<div class="clearfix product-price-cover">
										<div class="product-price primary-color float-left">
											<ins><span class="text-brand">$120.00</span></ins>
											<ins><span class="old-price font-md ml-15">$200.00</span></ins>
											<span class="save-price  font-md color3 ml-15">25% Off</span>
										</div>
									</div>
									<div class="bt-1 border-color-1 mt-15 mb-15"></div>
									<div class="short-desc mb-30">
										<p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
									</div>
									
									<div class="attr-detail attr-color mb-15">
										<strong class="mr-10">Color</strong>
										<ul class="list-filter color-filter">
											<li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
											<li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
											<li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
											<li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
											<li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
											<li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
											<li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
										</ul>
									</div>
									<div class="attr-detail attr-size">
										<strong class="mr-10">Size</strong>
										<ul class="list-filter size-filter font-small">
											<li><a href="#">S</a></li>
											<li class="active"><a href="#">M</a></li>
											<li><a href="#">L</a></li>
											<li><a href="#">XL</a></li>
											<li><a href="#">XXL</a></li>
										</ul>
									</div>
									<div class="bt-1 border-color-1 mt-30 mb-30"></div>
									<div class="detail-extralink">
										<div class="detail-qty border radius">
											<a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
											<span class="qty-val">1</span>
											<a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
										</div>
										<div class="product-extra-link2">
											<button type="submit" class="button button-add-to-cart">Add to cart</button>
											<a aria-label="Add To Wishlist" class="action-btn hover-up" href="#"><i class="fi-rs-heart"></i></a>
											<a aria-label="Compare" class="action-btn hover-up" href="#"><i class="fi-rs-shuffle"></i></a>
										</div>
									</div>
									<ul class="product-meta font-xs color-grey mt-50">
										<li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
										<li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
										<li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
									</ul>
								</div>
								<!-- Detail Info -->
							</div>
						</div>
					</div>        
			</div>
			</div>
		</div>
		<?php include('header.php');?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb">
						<?php if(empty($userId)){ 
						if(!empty($_GET['id'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> Model 
						<?php }if(!empty($_GET['SubCategory'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> <a href="Products.php?id=all" rel="nofollow">Model</a> <span></span> Sub-Model
						<?php }if(!empty($_GET['Model'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> <a href="Products.php?id=all" rel="nofollow">Model</a> <span></span> <a href="javascript: history.go(-1)" rel="nofollow"> Sub-Model</a><span></span> Products
						<?php }}
						else{if(!empty($_GET['id'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> Brand 
						<?php }if(!empty($_GET['CategoryId'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> <a href="Products.php?id=all" rel="nofollow">Brand</a> <span></span> Model
						<?php }if(!empty($_GET['SubCategoryId'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> <a href="Products.php?id=all" rel="nofollow">Brand</a> <span></span> <a href="javascript: history.go(-1)" rel="nofollow"> Model</a><span></span> Sub-Model
						<?php }if(!empty($_GET['ModelId'])){ ?>
						<a href="index.php" rel="nofollow">Home</a>
						<span></span> <a href="Products.php?id=all" rel="nofollow">Brand</a> <span></span> <a href="javascript: history.go(-2)" rel="nofollow"> Model</a><span></span> <a href="javascript: history.go(-2)" rel="nofollow"> Sub-Model</a><span></span> Products
						<?php }}
						?>
					</div>
				</div>
			</div>
			<?php
				/*if(empty($assigned_categories)){
					$query="SELECT PD.*,BC.Category as brand,BSC.SubCategory as product_name,BM.Model,(SELECT ImageName FROM productimages WHERE ProductID=PD.ProductID LIMIT 1) as image FROM productdetails PD LEFT JOIN BrandCategory BC ON PD.CategoryID=BC.CategoryID LEFT JOIN BrandSubCategory BSC ON PD.SubCategoryID=BSC.SubCategoryID LEFT JOIN BrandModel BM ON PD.ModelID=BM.ModelID";    
				} else {
					$query="SELECT PD.*,BC.Category as brand,BSC.SubCategory as product_name,BM.Model,(SELECT ImageName FROM productimages WHERE ProductID=PD.ProductID LIMIT 1) as image FROM productdetails PD LEFT JOIN BrandCategory BC ON PD.CategoryID=BC.CategoryID LEFT JOIN BrandSubCategory BSC ON PD.SubCategoryID=BSC.SubCategoryID LEFT JOIN BrandModel BM ON PD.ModelID=BM.ModelID WHERE BC.CategoryID IN (".$assigned_categories.")";
				}*/
				
				
				$query = "SELECT * FROM ";
				if (!empty($_GET['SubCategoryId'])) {
					$query .= "BrandModel WHERE SubCategoryID='".$_GET['SubCategoryId']."'";
				}
				if (!empty($_GET['CategoryId'])) {
					$query .= "BrandSubCategory WHERE CategoryId='".$_GET['CategoryId']."'";
				}
				if (!empty($_GET['ModelId'])) {
					if ($userId != '') {
						$queryy="SELECT * FROM Users WHERE UserID='$userId'";
						$resultt = mysqli_query($conn, $queryy);
						$rows = mysqli_fetch_assoc($resultt);
						$cate = $rows['AssignDriver'];
						if ($cate == '1500MA') {
							$dri = '750MA';
						} else if ($cate=='750MA') {
							$dri = '1500MA';
						} else {
							$dri = 'B';
						}
						if (!empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
						} else if (!empty($_GET['driver']) && empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
						} else if(empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
						} else {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and Driver NOT LIKE '%".$dri."%'";
						}
					} else {
						$queryy="SELECT * FROM UserRoles WHERE RoleID = '2'";
						$resultt = mysqli_query($conn, $queryy);
						$rows = mysqli_fetch_assoc($resultt);
						$cate = $rows['assigndriver'];
						if ($cate == '1500MA') {
							$dri = '750MA';
						} else if ($cate=='750MA') {
							$dri = '1500MA';
						} else {
							$dri = 'B';
						}
						if (!empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
						} else if(!empty($_GET['driver']) && empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
						} else if(empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
						} else {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and Driver NOT LIKE '%".$dri."%'";
						}
					}
				}
				if (!empty($_GET['SubCategory'])) {
					$query .= "BrandModel A  inner join BrandSubCategory B on A.SubCategoryID=B.SubCategoryID where B.SubCategory='".$_GET['SubCategory']."'";
				}
				if (!empty($_GET['id'])) {
					if (!empty($users['AssignedCategories'])) {
						$query .= "BrandCategory WHERE is_deleted = '0' AND CategoryID IN ({$users['AssignedCategories']})";
					} else {
						$query .="BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
					}
				}
				if (!empty($_GET['Model'])) {
					$modelname = utf8_decode(urldecode($_GET['Model']));
					if ($userId!='') {
						$queryy = "SELECT * FROM Users WHERE UserID='$userId'";
						$resultt = mysqli_query($conn, $queryy);
						$rows = mysqli_fetch_assoc($resultt);
						$cate = $rows['AssignDriver'];
						if ($cate == '1500MA') {
							$dri = '750MA';
						} else if ($cate=='750MA') {
							$dri = '1500MA';
						} else {
							$dri = 'B';
						}
						if (!empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
						} else if (!empty($_GET['driver']) && empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
						} else if (empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
						} else {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%'";
						}
					} else {
						$queryy = "SELECT * FROM UserRoles WHERE RoleID = '2'";
						$resultt = mysqli_query($conn, $queryy);
						$rows = mysqli_fetch_assoc($resultt);
						$cate = $rows['assigndriver'];
						if ($cate == '1500MA') {
							$dri = '750MA';
						} else if ($cate=='750MA') {
							$dri = '1500MA';
						} else {
							$dri = 'B';
						}
						if (!empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
						} else if (!empty($_GET['driver']) && empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
						} else if (empty($_GET['driver']) && !empty($_GET['watt'])) {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
						} else {
							$query .= "productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%'";
						}
					}
				}
				
				//echo $query;
				$result = mysqli_query($conn,$query);
				$counts = mysqli_num_rows($result);
			?>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 primary-sidebar sticky-sidebar">
						<div class="row">
							<div class="col-lg-12 col-mg-6"></div>
							<div class="col-lg-12 col-mg-6"></div>
						</div>
						<div class="widget-category mb-30">
							<!-- Fillter By Price -->
							<?php
								if (empty($userId)) {
							?>
							<h5 class="section-title style-1 mb-30 wow fadeIn animated animated animated" style="visibility: visible;">Categories</h5>
							<div>
								<?php
									$query5 = "SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
									//echo $users['AssignedCategories'];
									$result5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));
									while ($row5 = mysqli_fetch_assoc($result5)) {
										$subcategory = $row5['SubCategory'];
								?>
								<button class="collapsiblee" style="border:1px solid #e8e8e8;width:100%;background-color:white;padding: 6px 0;text-align:center"><?= ucwords(strtolower($subcategory)) ?></button>
								<div class="contente">
									<?php
										$query6 = "SELECT DISTINCT(A.Model), A.ModelID FROM BrandModel A INNER JOIN BrandSubCategory B ON A.SubCategoryID=B.SubCategoryID WHERE B.SubCategory='".$subcategory."' ORDER BY B.CategoryID";
										$result6 = mysqli_query($conn, $query6) or die(mysqli_error($conn));
										while ($row6 = mysqli_fetch_assoc($result6)) {
											$modelid = $row6['ModelID'];
											$modelname = $row6['Model'];
									?>
									<ul class="categories">
										<li style="border-bottom:1px solid #cdc8c8;padding:5px"><a href="Products.php?Model=<?= $modelname ?>"><?= ucwords(strtolower($modelname)) ?></a></li>
									</ul>
									<?php
										}
									?>
								</div>
								<?php
									}
								?>
							</div>
						<?php
						}else{
						?>
						<h5 class="section-title style-1 mb-30 wow fadeIn animated animated animated" style="visibility: visible;">Brands</h5>
						<div>
							<?php
							if(empty($users['AssignedCategories'])){
							$query5 = "select * from BrandCategory";
							}
							else{
								$query5 = "SELECT * FROM BrandCategory WHERE is_deleted = '0' AND CategoryID IN ({$users['AssignedCategories']})";
							}
							//echo $users['AssignedCategories'];
				$result5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));
				while ($row5 = mysqli_fetch_assoc($result5)) {
								$catid = $row5['CategoryID'];
								$catname = $row5['Category'];
				?>
							<button class="collapsiblee" style="border:1px solid #e8e8e8;width:100%;background-color:white;padding: 6px 0;text-align:center"><?= $catname ?></button>
							<div class="contente">
							<?php $query6 = "select * from BrandSubCategory where CategoryID='$catid'";
				$result6 = mysqli_query($conn, $query6) or die(mysqli_error($conn));
				while ($row6 = mysqli_fetch_assoc($result6)) {
								$subid = $row6['SubCategoryID'];
								$subname = $row6['SubCategory'];
								?>
							
								<ul class="categories">
								<li style="border-bottom:1px solid #cdc8c8;padding:5px"><a href="Products.php?SubCategoryId=<?= $subid ?>"><?= ucwords(strtolower($subname)) ?></a></li>
								</ul>
								<?php } ?>
							</div>
							<?php } ?>
</div><?php } ?>

<script>
var coll = document.getElementsByClassName("collapsiblee");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
	this.classList.toggle("activee");
	var contente = this.nextElementSibling;
	if (contente.style.maxHeight){
	  contente.style.maxHeight = null;
	} else {
	  contente.style.maxHeight = contente.scrollHeight + "px";
	} 
  });
}
</script>
							
							
						
					</div>
					<div class="widget-category mb-30">
					<h5 class="section-title style-1 mb-30 wow fadeIn animated animated animated">Driver</h5>
					<form method="get" id="header-form">
						<div class="custome-checkbox">
							<input class="form-check-input driver" type="checkbox" name="driver" id="300MA" value="300" <?= (str_contains($driver, '300')) ? 'checked' : '' ?>>
							<label class="form-check-label" for="300MA"><span>300 MA</span></label>
							<br>
							<input class="form-check-input driver" type="checkbox" name="driver" id="600MA" value="600" <?= (str_contains($driver, '600')) ? 'checked' : '' ?>>
							<label class="form-check-label" for="600MA"><span>600 MA</span></label>
							<br>
							<input class="form-check-input driver" type="checkbox" name="driver" id="900MA" value="900" <?= (str_contains($driver, '900')) ? 'checked' : '' ?>>
							<label class="form-check-label" for="900MA"><span>900 MA</span></label>
							<br>
							<input class="form-check-input driver" type="checkbox" name="driver" id="750MA" value="750" <?= (str_contains($driver, '750')) ? 'checked' : '' ?>>
							<label class="form-check-label" for="750MA"><span>750 MA</span></label>
							<br>
							<input class="form-check-input driver" type="checkbox" name="driver" id="1500MA" value="1500" <?= (str_contains($driver, '1500')) ? 'checked' : '' ?>>
							<label class="form-check-label" style="margin-bottom:15px"  for="1500MA"><span>1500 MA</span></label>
						</div>
					</form>
					<h5 class="section-title style-1 mb-30 wow fadeIn animated animated animated" style="visibility: visible;">Watts</h5>
					<form method="get" id="watt-form">
						<div class="custome-checkbox">
							<div class="row" style="font-size:13px">
								<?php 
									$query8 = "SELECT DISTINCT(Watts) FROM `productdetails` WHERE is_deleted='0' and Watts != 'W' order by length(Watts),Watts";
									$result8 = mysqli_query($conn, $query8) or die(mysqli_error($conn));
									while ($row8 = mysqli_fetch_assoc($result8)) {
										$watts = $row8['Watts'];
										$new_str_arr = explode('W', $watts);
										$wattno = $new_str_arr[0];
								?>  
								<div class="col-lg-4" style="padding-left:0px"><input class="form-check-input watt" type="checkbox" name="watt" id="<?= $watts ?>" value="<?= $wattno ?>" <?= (str_contains($watt, $wattno)) ? 'checked' : '' ?>>
								<label class="form-check-label" for="<?= $watts ?>"><span><?= $watts ?></span></label></div>
								<?php
									}
								?>
							</div>
						</div>
					</form>
					</div>
					</div>
					<div class="col-lg-9">
							<div class="shop-product-fillter">
								<div class="totall-product">
									<p> We found <strong class="text-brand"><?= $counts ?></strong> items for you!</p>
								</div>
								
								<!--<div class="sort-by-product-area">
									<div class="sort-by-cover mr-10">
										<div class="sort-by-product-wrap">
											<div class="sort-by">
												<span><i class="fi-rs-apps"></i>Show:</span>
											</div>
											<div class="sort-by-dropdown-wrap">
												<span> 50 <i class="fi-rs-angle-small-down"></i></span>
											</div>
										</div>
										<div class="sort-by-dropdown">
											<ul>
												<li><a class="active" href="#">50</a></li>
												<li><a href="#">100</a></li>
												<li><a href="#">150</a></li>
												<li><a href="#">200</a></li>
												<li><a href="#">All</a></li>
											</ul>
										</div>
									</div>
									<div class="sort-by-cover">
										<div class="sort-by-product-wrap">
											<div class="sort-by">
												<span><i class="fi-rs-apps-sort"></i>Sort by:</span>
											</div>
											<div class="sort-by-dropdown-wrap">
												<span> Featured <i class="fi-rs-angle-small-down"></i></span>
											</div>
										</div>
										<div class="sort-by-dropdown">
											<ul>
												<li><a class="active" href="#">Featured</a></li>
												<li><a href="#">Price: Low to High</a></li>
												<li><a href="#">Price: High to Low</a></li>
												<li><a href="#">Release Date</a></li>
												<li><a href="#">Avg. Rating</a></li>
											</ul>
										</div>
									</div>
								</div>-->
							</div>
							<div class="row product-grid-3">
								<?php if($counts == '0'){
								?>
								<div style="text-align:center">
							<p class=""><img src="assets/imgs/theme/emptybox.png" width="240px" alt="" class="hover-up"></p>
					<h2 class="mb-30">No Products Found</h2>
					
					<form class="contact-form-style text-center" id="contact-form" action="#" method="post">
						
						<a class="btn btn-default submit-auto-width font-xs hover-up" href="Products.php?id=all">Refresh Products</a>
					</form></div>
								<?php
								}								
								?>
								<?php
										if(!empty($_GET['CategoryId'])){
											$query1 = "Select * from BrandSubCategory where CategoryId='".$_GET['CategoryId']."'";
											$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
											while ($row1 = mysqli_fetch_assoc($result1)) {
												$image=$row1['SubCategoryImage'];
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?SubCategoryId=<?= $row1['SubCategoryID'] ?>">
													<img class="default-img" src="<?= $image ?>" alt="">
													<img class="hover-img" src="<?= $image ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Products.php?SubCategoryId=<?= $row1['SubCategoryID'] ?>"><?= $row1['SubCategory'] ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										?>
										
										<?php
										if(!empty($_GET['SubCategoryId'])){
											$query2 = "Select * from BrandModel A inner join BrandSubCategory B on A.SubCategoryID=B.SubCategoryID where A.SubCategoryID='".$_GET['SubCategoryId']."'";
											$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
											while ($row2 = mysqli_fetch_assoc($result2)) {
												$image2=$row2['SubCategoryImage'];
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?ModelId=<?= $row2['ModelID'] ?>">
													<img class="default-img" src="<?= $image2 ?>" alt="">
													<img class="hover-img" src="<?= $image2 ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Products.php?ModelId=<?= $row2['ModelID'] ?>"><?= $row2['Model'] ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										?>
										
										
										 <?php
										if(!empty($_GET['ModelId'])){
											if($userId!=''){
												$queryy="select * from Users where UserID='$userId'";
												$resultt = mysqli_query($conn, $queryy);
											$rows = mysqli_fetch_assoc($resultt);
											$cate=$rows['AssignDriver'];
											if($cate == '1500MA'){
												$dri = '750MA';
											}
											else if($cate=='750MA'){
												$dri = '1500MA';
											}
											else{
												$dri = 'B';
											}
											if(!empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
												}else if(!empty($_GET['driver']) && empty($_GET['watt'])){
												$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
												}
												else if(empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
												}
												else{
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and Driver NOT LIKE '%".$dri."%'";
												}
											//echo $query3;
											}else{
												$queryy="select * from UserRoles where RoleID='2'";
												$resultt = mysqli_query($conn, $queryy);
											$rows = mysqli_fetch_assoc($resultt);
											$cate=$rows['assigndriver'];
											if($cate == '1500MA'){
												$dri = '750MA';
											}
											else if($cate=='750MA'){
												$dri = '1500MA';
											}
											else{
												$dri = 'B';
											}
												if(!empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
												}else if(!empty($_GET['driver']) && empty($_GET['watt'])){
												$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
												}
												else if(empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
												}
												else{
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where A.ModelID='".$_GET['ModelId']."' and Driver NOT LIKE '%".$dri."%'";
												}
											}
											
											$result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
											while ($row3 = mysqli_fetch_assoc($result3)) {
												$product = $row3['ProductID'];
												$result4 = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '$product' LIMIT 1") or die(mysqli_error($conn));
											$row4 = mysqli_fetch_assoc($result4);
											$image4 = !empty($row4['ImageName']) ? $row4['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Product_Details.php?id=<?= $product ?>">
													<img class="default-img" src="<?= $image4 ?>" alt="">
													<img class="hover-img" src="<?= $image4 ?>" alt="">
												</a>
											</div>
											
											<div class="product-badges product-badges-position product-badges-mrg">
												<?php
													$maxprice=$row3['maxamt'];
													$price=$row3['BtoCPrice'];
													$tprice = $maxprice - $price;
													$disper = $tprice * 100 / $maxprice;
												?>
											<span class="best" style="background-color:#046963"><?= $disper ?>% off</span>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
										</div>
										<div class="product-content-wrap" style="padding: 10px 20px 15px 20px;">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Product_Details.php?id=<?= $product ?>"><?= $row3['Model'].' '.$row3['Driver'].' ('.$row3['Watts'].')' ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<div class="product-price" style="text-align:center">
												<span><?= $row3['Model_No'] ?></span>
											</div>
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										?>
										
										 <?php
										if(!empty($_GET['Model'])){
											if($userId!=''){
												$queryy="select * from Users where UserID='$userId'";
												$resultt = mysqli_query($conn, $queryy);
											$rows = mysqli_fetch_assoc($resultt);
											$cate=$rows['AssignDriver'];
											if($cate == '1500MA'){
												$dri = '750MA';
											}
											else if($cate=='750MA'){
												$dri = '1500MA';
											}
											else{
												$dri = 'B';
											}
											if(!empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
												}else if(!empty($_GET['driver']) && empty($_GET['watt'])){
												$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
												}
												else if(empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
												}
												else{
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%'";
												}
										  //echo $query3;
											}else{
												$queryy="select * from UserRoles where RoleID='2'";
												$resultt = mysqli_query($conn, $queryy);
											$rows = mysqli_fetch_assoc($resultt);
											$cate=$rows['assigndriver'];
											if($cate == '1500MA'){
												$dri = '750MA';
											}
											else if($cate=='750MA'){
												$dri = '1500MA';
											}
											else{
												$dri = 'B';
											}
												
												if(!empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].") and A.Watts IN (".$_GET['watt'].") order by A.Driver";
												}else if(!empty($_GET['driver']) && empty($_GET['watt'])){
												$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Driver IN (".$_GET['driver'].")  order by A.Driver";
												}
												else if(empty($_GET['driver']) && !empty($_GET['watt'])){
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%' and A.Watts IN (".$_GET['watt'].") order by A.Watts";
												}
												else{
													$query3 = "Select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$_GET['Model']."' and A.Driver NOT LIKE '%".$dri."%'";
												}
												   // echo $query3;
												}
											
											$result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
											while ($row3 = mysqli_fetch_assoc($result3)) {
												$product = $row3['ProductID'];
												$result4 = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '$product' LIMIT 1") or die(mysqli_error($conn));
											$row4 = mysqli_fetch_assoc($result4);
											$image4 = !empty($row4['ImageName']) ? $row4['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Product_Details.php?id=<?= $product ?>">
													<img class="default-img" src="<?= $image4 ?>" alt="">
													<img class="hover-img" src="<?= $image4 ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
											<div class="product-badges product-badges-position product-badges-mrg">
												<?php
													$maxprice=$row3['maxamt'];
													$price=$row3['BtoCPrice'];
													$tprice = $maxprice - $price;
													$disper = $tprice * 100 / $maxprice;
												?>
											<span class="best" style="background-color:#046963"><?= $disper ?>% off</span>
											</div>
										</div>
										<div class="product-content-wrap" style="padding: 10px 20px 15px 20px;">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Product_Details.php?id=<?= $product ?>"><?= $row3['Model'].' '.$row3['Driver'].' ('.$row3['Watts'].')' ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<div class="product-price" style="text-align:center">
												<span><?= $row3['Model_No'] ?></span>
											</div>
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										?> 
										 
										<?php
										if(!empty($_GET['SubCategory'])){
											$query2 = "Select * from BrandModel A  inner join BrandSubCategory B on A.SubCategoryID=B.SubCategoryID where B.SubCategory='".$_GET['SubCategory']."' order by B.CategoryID";
											$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
											while ($row2 = mysqli_fetch_assoc($result2)) {
												$image2=$row2['SubCategoryImage'];
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?Model=<?= $row2['Model'] ?>">
													<img class="default-img" src="<?= $image2 ?>" alt="">
													<img class="hover-img" src="<?= $image2 ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
											
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Products.php?Model=<?= $row2['Model'] ?>"><?= ucwords(strtolower($row2['Model'])) ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										?>
										
										 
										<?php
										if(!empty($_GET['Modell'])){
											$query21 = "select * from productdetails A inner join BrandModel B on A.ModelID=B.ModelID where B.Model='".$modelname."'";
											$result21 = mysqli_query($conn, $query21) or die(mysqli_error($conn));
											while ($row21 = mysqli_fetch_assoc($result21)) {
												$product=$row21['ProductID'];
												$result41 = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '$product' LIMIT 1") or die(mysqli_error($conn));
											$row41 = mysqli_fetch_assoc($result41);
											$image41 = !empty($row41['ImageName']) ? $row41['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Product_Details.php?id=<?= $product ?>">
													<img class="default-img" src="<?= $image41 ?>" alt="">
													<img class="hover-img" src="<?= $image41 ?>" alt="">
												</a>
											</div>
										</div>
										<div class="product-content-wrap">
											<h2 class="fontt" style="text-align:center"><a href="Product_Details.php?id=<?= $product ?>"><?= $row21['Model'].' '.$row21['Driver'].' ('.$row21['Watts'].')' ?></a></h2>
											
										</div>
									</div>
								</div>
									  <?php      }
										}
										?>
										
										
										 <?php
										if(!empty($_GET['id'])){
											if(!empty($users['AssignedCategories'])){
										$query5="SELECT * FROM BrandCategory WHERE is_deleted = '0' AND CategoryID IN ({$users['AssignedCategories']})";
										$result5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));
											while ($row5 = mysqli_fetch_assoc($result5)) {
												$image5=$row5['CategoryImage'];
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?CategoryId=<?= $row5['CategoryID'] ?>">
													<img class="default-img" src="<?= $image5 ?>" alt="">
													<img class="hover-img" src="<?= $image5 ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Products.php?CategoryId=<?= $row5['CategoryID'] ?>"><?= $row5['Category'] ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
									} else {
										$query5="SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
									
											$result5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));
											while ($row5 = mysqli_fetch_assoc($result5)) {
												$image5=$row5['SubCategoryImage'];
												?>
												<div class="col-lg-4 col-md-4 reduce">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?SubCategory=<?= $row5['SubCategory'] ?>">
													<img class="default-img" src="<?= $image5 ?>" alt="">
													<img class="hover-img" src="<?= $image5 ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>-->
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2 class="fontt" style="text-align:center"><a href="Products.php?SubCategory=<?= $row5['SubCategory'] ?>"><?= $row5['SubCategory'] ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
									  <?php      }
										}
										}
										?>
										
									
							</div>
							<!--pagination-->
							<!--<div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-start">
										<li class="page-item active"><a class="page-link" href="#">01</a></li>
										<li class="page-item"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link dot" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">16</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
									</ul>
								</nav>
							</div>-->
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php include('footer.php'); ?>
		<!-- Preloader Start -->
	<!--	<div id="preloader-active">
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
		</div>-->
		<!-- Vendor JS-->
		<!--<script src="jquery-3.6.0.min.js"></script>-->
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
		<script src="assets/js/custom.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".driver").change(function () {
					var check_box_values = $('#header-form [type="checkbox"]:checked').map(function () {
						return this.value;
					}).get();
					//alert(check_box_values);
					//alert(window.location.href.indexOf("driver"));
					var parameter = "driver";
					var url=document.location.href;
					var urlparts= url.split('?');

					if (urlparts.length>=2) {
						var urlBase=urlparts.shift();
						var queryString=urlparts.join("?");
						var prefix = encodeURIComponent(parameter) + '=';
						console.log(prefix);
						var pars = queryString.split(/[&;]/g);
						for (var i= pars.length; i-- > 0;)
							if (pars[i].lastIndexOf(prefix, 0) !== -1)
								pars.splice(i, 1);
						url = urlBase+'?'+pars.join('&');
						//window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar.
						var mainurl = url + "&driver=" + check_box_values;
						window.location.href = mainurl;
					}
				});

				$(".watt").change(function() {
					var check_box_values = $('#watt-form [type="checkbox"]:checked').map(function () {
						return this.value;
					}).get();
					//alert(check_box_values);
					//alert(window.location.href.indexOf("driver"));
					var parameter = "watt";
					var url=document.location.href;
					var urlparts= url.split('?');
					if (urlparts.length>=2) {
						var urlBase=urlparts.shift();
						var queryString=urlparts.join("?");
						var prefix = encodeURIComponent(parameter)+'=';
						var pars = queryString.split(/[&;]/g);
						for (var i= pars.length; i-- > 0;)
							if (pars[i].lastIndexOf(prefix, 0) !== -1)
								pars.splice(i, 1);
						url = urlBase+'?'+pars.join('&');
						//window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar .
						var mainurl = url + "&watt=" + check_box_values;
						window.location.href = mainurl;
					}
				});
			});
		</script>
	</body>
</html>