<?php
	session_start();
	require_once 'db.php';
	$userId = !empty($_SESSION['userid']) ? $_SESSION['userid'] : '';

	$usr = mysqli_query($conn, "SELECT * FROM Users WHERE UserID = '$userId'") or die(mysqli_error($conn));
	$users = mysqli_fetch_assoc($usr);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ramdev PCB</title>
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
		<!-- Modal -->
		<div class="modal fade custom-modal" id="onloadModal1" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
					<div class="modal-body">
						<div class="deal" style="background-image: url('assets/imgs/banner/popup.jpg')">
							<div class="deal-top">
								<h2 class="text-brand"><!--Deal of the Day--></h2>
								<h5><!--Limited quantities.--></h5>
							</div>
							<div class="deal-content">
								<h6 class="product-title"><a href="shop-product-right.html"><!--Summer Collection New Morden Design--></a></h6>
								<div class="product-price"><span class="new-price"><!--$139.00--></span><span class="old-price"><!--$160.99--></span></div>
							</div>
							<div class="deal-bottom">
								<p><!--Hurry Up! Offer End In:--></p>
							<!-- <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span></div>
								<a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
										<p class="font-sm"><!--Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!--></p>
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
											<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
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
		<?php include("header.php"); ?>
		<main class="main">
			<section class="home-slider position-relative pt-25 pb-20">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="position-relative">
								<div class="hero-slider-1 style-3 dot-style-1 dot-style-1-position-1">
									<div class="single-hero-slider single-animation-wrap">
										<div class="container">
											<div class="slider-1-height-3 slider-animated-1">
												<div class="hero-slider-content-2">
													<!--<h4 class="animated">Trade-In Offer</h4>
													<h2 class="animated fw-900">Supper Value Deals</h2>
													<h1 class="animated fw-900 text-brand">On All Products</h1>
													<p class="animated">Save more with coupons & up to 70% off</p>
													<a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>-->
												</div>
												<div class="slider-img">
													<img src="assets/imgs/slider/Slider 4-01.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="single-hero-slider single-animation-wrap">
										<div class="container">
											<div class="slider-1-height-3 slider-animated-1">
												<div class="hero-slider-content-2">
													<!--<h4 class="animated">Tech Promotions</h4>
													<h2 class="animated fw-900">Tech Trending</h2>
													<h1 class="animated fw-900 text-brand">Great Collection</h1>
													<p class="animated">Save more with coupons & up to 20% off</p>
													<a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>-->
												</div>
												<div class="slider-img">
													<img src="assets/imgs/slider/Slider 4-02.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slider-arrow hero-slider-1-arrow style-3"></div>
							</div>
						</div>
						<div class="col-lg-3 d-md-none d-lg-block">
							<div class="banner-img banner-1 wow fadeIn  animated home-3">
								<img class="border-radius-10" src="assets/imgs/banner/banner 5-01.jpg" alt="">
								<div class="banner-text">
									<span><!--Accessories--></span>
									<h4><!--Save 17% on <br>Autumn Hat--></h4>
									<a href="#"><!--Shop Now--> <i class="fi-rs-arrow-right"></i></a>
								</div>
							</div>
							<div class="banner-img banner-2 wow fadeIn  animated mb-0">
								<img class="border-radius-10" src="assets/imgs/banner/banner 6-01.jpg" alt="">
								<div class="banner-text">
									<span><!--Smart Offer--></span>
									<h4><!--Save 20% on <br>Eardrop--></h4>
									<a href="#"><!--Shop Now --><i class="fi-rs-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="featured section-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-1.png" alt="">
								<h4 class="bg-1">Easy Transport</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-2.png" alt="">
								<h4 class="bg-3">Online Order</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-3.png" alt="">
								<h4 class="bg-2">Save Time</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-4.png" alt="">
								<h4 class="bg-4">Satisfaction</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-5.png" alt="">
								<h4 class="bg-5">Timely Delivery</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated">
								<img src="assets/imgs/theme/icons/feature-6.png" alt="">
								<h4 class="bg-6">Support</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product-tabs section-padding wow fadeIn animated">
				<div class="container">
					<div class="tab-header">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
							</li>
						<!-- <li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
							</li>-->
						</ul>
						<a href="Products.php" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
					</div>
					<!--End nav-tabs-->
					<div class="tab-content wow fadeIn animated" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
							<div class="row product-grid-4">
								<?php
									if(!empty($users['AssignedCategories'])){
										$query="SELECT * FROM BrandSubCategory WHERE is_deleted = '0' AND CategoryID IN ({$users['AssignedCategories']}) GROUP BY SubCategory";
									} else {
										$query="SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
									}
									$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while($row = mysqli_fetch_assoc($result)) {
										$image = !empty($row['SubCategoryImage']) ? $row['SubCategoryImage'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.png';
								?>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="Products.php?subCategoryId=<?= $row['SubCategoryID'] ?>">
													<img class="default-img" src="<?= $image ?>" alt="" >
													<img class="hover-img" src="<?= $image ?>" alt="">
												</a>
											</div>
											<!--<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-search"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>-->
											<div class="product-badges product-badges-position product-badges-mrg"></div>
										</div>
										<div class="product-content-wrap">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2><a href="Products.php?subCategoryId=<?= $row['SubCategoryID'] ?>"><?= $row['SubCategory'] ?></a></h2>
											<!--<div class="product-price">
												<span>&#8377;'.$price.'</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="Product_Details.php?id='.$id.'"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>-->
										</div>
									</div>
								</div>
								<?php
									}
								?>
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab one (Featured)-->
						<div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
							<div class="row product-grid-4">
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Donec </a>
											</div>
											<h2><a href="shop-product-right.html">Lorem ipsum dolor</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">New</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Music</a>
											</div>
											<h2><a href="shop-product-right.html">Sed tincidunt interdum</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>50%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$138.85 </span>
												<span class="old-price">$255.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="best">Best Sell</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Watch</a>
											</div>
											<h2><a href="shop-product-right.html">Fusce metus orci</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>95%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$338.85 </span>
												<span class="old-price">$445.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Sale</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Music</a>
											</div>
											<h2><a href="shop-product-right.html">Integer venenatis libero</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$123.85 </span>
												<span class="old-price">$235.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">-30%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Speaker</a>
											</div>
											<h2><a href="shop-product-right.html">Cras tempor orci id</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$28.85 </span>
												<span class="old-price">$45.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">-22%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Camera</a>
											</div>
											<h2><a href="shop-product-right.html">Nullam cursus mi qui</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">New</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Phone</a>
											</div>
											<h2><a href="shop-product-right.html">Fusce fringilla ultrices</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>98%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$1275.85 </span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Accessories </a>
											</div>
											<h2><a href="shop-product-right.html">Sed sollicitudin est</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab two (Popular)-->
						<div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
							<div class="row product-grid-4">
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
													<img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Music</a>
											</div>
											<h2><a href="shop-product-right.html">Donec ut nisl rutrum</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>90%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">New</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Music</a>
											</div>
											<h2><a href="shop-product-right.html">Nullam dapibus pharetra</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>50%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$138.85 </span>
												<span class="old-price">$255.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-4-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-4-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="best">Best Sell</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Watch</a>
											</div>
											<h2><a href="shop-product-right.html">Morbi dictum finibus</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>95%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$338.85 </span>
												<span class="old-price">$445.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-5-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-5-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="sale">Sale</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Music</a>
											</div>
											<h2><a href="shop-product-right.html">Nunc volutpat massa</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$123.85 </span>
												<span class="old-price">$235.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-6-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-6-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">-30%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Speaker</a>
											</div>
											<h2><a href="shop-product-right.html">Nullam ultricies luctus</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$28.85 </span>
												<span class="old-price">$45.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">-22%</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Camera</a>
											</div>
											<h2><a href="shop-product-right.html">Nullam mattis enim</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-8-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-8-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="new">New</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Phone</a>
											</div>
											<h2><a href="shop-product-right.html">Vivamus sollicitudin</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>98%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$1275.85 </span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="hover-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
													<img class="default-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
												<a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="#">Accessories </a>
											</div>
											<h2><a href="shop-product-right.html"> Donec ut nisl rutrum</a></h2>
											<div class="rating-result" title="90%">
												<span>
													<span>70%</span>
												</span>
											</div>
											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab three (New added)-->
					</div>
					<!--End tab-content-->
				</div>
			</section>
			<section class="banner-2 section-padding pb-0">
				<div class="container">
					<div class="banner-img banner-big wow fadeIn animated f-none">
						<img src="assets/imgs/banner/banner-8.jpg" alt="">
						<div class="banner-text d-md-block d-none">
							<h4 class="mb-15 mt-40 text-brand">Pcb Assembly Services</h4>
							<h1 class="fw-600 mb-20">We're ISO <br>Certified PCB Manufacturer</h1>
							<a href="#" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</section>
			<section class="popular-categories section-padding mt-15">
				<div class="container wow fadeIn animated">
					<h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
					<div class="carausel-6-columns-cover position-relative">
						<div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
						<div class="carausel-6-columns" id="carausel-6-columns">
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-1.jpg" alt=""></a>
								</figure>
								<h5><a href="#">STREET LIGHT LENS</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"> <img src="assets/imgs/shop/category-thumb-2.jpg" alt=""></a>
								</figure>
								<h5><a href="#">ECO FLOOD LIGHT DOWNCHOKE WHITE REFLECTOR</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-3.jpg" alt=""></a>
								</figure>
								<h5><a href="#">FLOOD LIGHT LENS</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-4.jpg" alt=""></a>
								</figure>
								<h5><a href="#">FLOOD LIGHT BACK CHOKE</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-5.jpg" alt=""></a>
								</figure>
								<h5><a href="#">FLOOD LIGHT DOWN CHOKE</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-6.jpg" alt=""></a>
								</figure>
								<h5><a href="#">STREET LIGHT GLASS MODEL</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-7.jpg" alt=""></a>
								</figure>
								<h5><a href="shop-grid-right.html">STREET LIGHT</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-8.jpg" alt=""></a>
								</figure>
								<h5><a href="#">NEW FLOOD LIGHT DOWNCHOKE</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-9.jpg" alt=""></a>
								</figure>
								<h5><a href="#">SOLAR LIGHT</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-10.jpg" alt=""></a>
								</figure>
								<h5><a href="#">RGB NEW FLOOD LIGHT DOWNCHOKE</a></h5>
							</div>
							<div class="card-1">
								<figure class=" img-hover-scale overflow-hidden">
									<a href="#"><img src="assets/imgs/shop/category-thumb-11.jpg" alt=""></a>
								</figure>
								<h5><a href="#">RGB NEW FLOOD LIGHT DOWNCHOKE BIG SIZE</a></h5>
							</div>
						</div>
					</div>
				</div>
			</section>
		<section class="banners mb-20">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
								<img src="assets/imgs/banner/banner-1.png" alt="">
								<div class="banner-text">
									<p class="text-grey-3">-Instant 30 mint. Quotation .<br>-Two Hour Complaint Feedback . </p>
									<h4><!--Save 20% on --><br><!--Woman Bag--></h4>
									<!--<a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
								<img src="assets/imgs/banner/banner-2.png" alt="">
								<div class="banner-text">
									<p class="text-grey-3">-Technical Support .<br>- Order Service .<br>-Production Run & Delivery . </p>
									<h4><!--Great Summer--> <br><!--Collection--></h4>
									<!--<a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
						<div class="col-lg-4 d-md-none d-lg-flex">
							<div class="banner-img wow fadeIn animated  mb-sm-0">
								<img src="assets/imgs/banner/banner-3.png" alt="">
								<div class="banner-text">
									<p class="text-grey-3">-Door to Door Service with
	Demostic & International Freight . <br>-Same Day Courier Services </p>
									<h4><!--Shop Today’s --><br><!--Deals & Offers--></h4>
								<!-- <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php include("footer.php"); ?>
		<!-- Preloader Start -->
		<!--<div id="preloader-active">
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