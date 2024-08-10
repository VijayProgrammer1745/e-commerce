<?php
	session_start();
	include('db.php');
	/*$subCategoryId = $_GET['subCategoryId'];*/
	$categoryId = $_GET['categoryId'];
	$userId = $_SESSION['userid'];

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
											<span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
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
											<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
											<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
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
						<a href="index.html" rel="nofollow">Home</a>
						<span></span> Products
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
				if (!empty($_GET['subCategoryId'])) {
					$query .= "BrandCategory WHERE CategoryID IN (SELECT CategoryID FROM BrandSubCategory WHERE SubCategoryID = '{$_GET['subCategoryId']}')";
				}
				if (!empty($_GET['categoryId'])) {
					$query .= "productdetails WHERE CategoryID = '{$_GET['categoryId']}'";
				}
				if (empty($_GET['subCategoryId']) && empty($_GET['categoryId'])) {
					if(!empty($users['AssignedCategories'])){
						$query .= "BrandSubCategory WHERE CategoryID IN ({$users['AssignedCategories']}) GROUP BY SubCategory";
					} else {
						$query .= "BrandSubCategory GROUP BY SubCategory";
					}
				}
				$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
				$counts = mysqli_num_rows($result);
			?>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
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
								<?php
									if (!empty($_GET['subCategoryId'])) {
										$result1 = mysqli_query($conn, "SELECT * FROM BrandSubCategory WHERE is_deleted = '0' AND SubCategoryID = '{$_GET['subCategoryId']}'") or die(mysqli_error($conn));
										$row1 = mysqli_fetch_assoc($result1);
										$subcategory = $row1['SubCategory'];
										$sql = "SELECT * FROM BrandCategory WHERE is_deleted = '0' AND CategoryID IN";
										if (empty($userId)) {
											$sql .= " (SELECT CategoryID FROM BrandSubCategory WHERE SubCategory = '{$subcategory}')";
										} else {
											$sql .= " ({$users['AssignedCategories']})";
										}
										$result2 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
										$categories = explode(',', $users['AssignedCategories']);
										$i = 0;
										while ($row2 = mysqli_fetch_assoc($result2)) {
											$image = !empty($row2['CategoryImage']) ? $row2['CategoryImage'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								?>
								<div class="col-lg-3 col-md-4">
									<div class="product-cart-wrap mb-30"  style="padding: 4px 4px;background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?categoryId=<?= $row2['CategoryID'] ?>">
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
											<h2><a href="Products.php?categoryId=<?= $row2['CategoryID'] ?>"><?= $row2['Category'] ?></a></h2>
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
								<?php
										}
									} if (!empty($_GET['categoryId'])) {
										$result2 = mysqli_query($conn, "SELECT * FROM productdetails pd, BrandSubCategory sc WHERE sc.SubCategoryID = pd.SubCategoryID AND pd.CategoryID = '{$_GET['categoryId']}'") or die(mysqli_error($conn));
										while ($row2 = mysqli_fetch_assoc($result2)) {
											$productId = $row2['ProductID'];
											$result3 = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '$productId' LIMIT 1") or die(mysqli_error($conn));
											$row3 = mysqli_fetch_assoc($result3);
											$image = !empty($row3['ImageName']) ? $row3['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								?>
								<div class="col-lg-3 col-md-4">
									<div class="product-cart-wrap mb-30"  style="background-color: #f7f8f9;">
										<div class="product-img-action-wrap"  style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Product_Details.php?id=<?= $row2['ProductID'] ?>">
													<img class="default-img" src="<?= $image ?>" alt="" width="235px" height="301px" />
													<img class="hover-img" src="<?= $image ?>" alt="" width="235px" height="301px" />
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
											<h2><a href="Product_Details.php?id=<?= $row2['ProductID'] ?>"><?= $row2['SubCategory'] . ' '. $row2['Driver'].' (' . $row2['Watts'] .')' ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<div class="product-price">
												<span>&#8377;<?= $_SESSION['user_role'] == 1 ? $row2['BtoBPrice1'] : $row2['BtoCPrice'] ?></span>
											</div>
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
								<?php
										}
									} if (empty($_GET['subCategoryId']) && empty($_GET['categoryId'])) {
										if(!empty($users['AssignedCategories'])){
											$query = "SELECT * FROM BrandSubCategory WHERE is_deleted = '0' CategoryID IN ({$users['AssignedCategories']}) GROUP BY SubCategory";
										} else {
											$query = "SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
										}
										$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
										while ($row = mysqli_fetch_assoc($result)) {
											$image = !empty($row['SubCategoryImage']) ? $row['SubCategoryImage'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
								?>
								<div class="col-lg-3 col-md-4">
									<div class="product-cart-wrap mb-30" style="    background-color: #f7f8f9;">
										<div class="product-img-action-wrap" style="padding: 4px 4px;background-color: #f7f8f9;">
											<div class="product-img product-img-zoom">
												<a href="Products.php?subCategoryId=<?= $row['SubCategoryID'] ?>">
													<img class="default-img" src="<?= $image ?>" alt="" width="235px" height="301px" />
													<img class="hover-img" src="<?= $image ?>" alt="" width="235px" height="301px" />
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
											<h2><a href="Products.php?subCategoryId=<?= $row['SubCategoryID'] ?>"><?= $row['SubCategory'] ?></a></h2>
											<!--<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>-->
											<!--<div class="product-price">
												<span>&#8377;<?= $row['BtoCPrice'] ?></span>
											</div>-->
											<!--<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
								<?php
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
	</body>
</html>