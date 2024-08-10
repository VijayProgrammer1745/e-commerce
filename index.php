<?php
	session_start();
	require_once 'db.php';
	$userId = !empty($_SESSION['userid']) ? $_SESSION['userid'] : '';

	$usr = mysqli_query($conn, "SELECT * FROM Users WHERE UserID = '$userId'") or die(mysqli_error($conn));
	//	echo $userId;
	$users = mysqli_fetch_assoc($usr);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ramdev PCB - PCB Manufacturer of Flood Light PCB, Street Light PCB &amp; Highbay Light PCB</title>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="PCB Manufacturer of Flood Light PCB, Street Light PCB &amp; Highbay Light PCB from vasai">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="RAMDEV PCB">
		<meta property="og:type" content="PCB Manufacturer of Flood Light PCB, Street Light PCB &amp; Highbay Light PCB from vasai">
		<meta property="og:url" content="https://ramdevpcb.com/">
		<meta property="og:image" content="https://ramdevpcb.com/assets/imgs/theme/logo6.png">
		<meta name="keywords" content="street light pcb,street light led pcb,led flood light pcb,led street light pcb,pcb board manufacturer,led circuit board,highbay light,street light in vasai,street light pcb in vasaiSTREET light,highbay light in vasai,highbay light pcb in vasaiFlood light,Flood light in vasai,Flood light pcb in vasai"
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/main.css?v=3.3">
		<link rel="stylesheet" href="assets/css/custom.css" />
		<style>
			@media only screen and (max-width:600px){
				.product-content-wrap{
					padding-top:10px!important;
				}
			}
		</style>
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
													<img src="assets/imgs/slider/Slider3.jpg" alt="">
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
									<!--<a href="#"><!--Shop Now--> <!--<i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
							<div class="banner-img banner-2 wow fadeIn  animated mb-0">
								<img class="border-radius-10" src="assets/imgs/banner/banner 6-01.jpg" alt="">
								<div class="banner-text">
									<span><!--Smart Offer--></span>
									<h4><!--Save 20% on <br>Eardrop--></h4>
									<!--<a href="#"><!--Shop Now --><!--<i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="banners mb-20">
				<div class="container">
				    <!--<h3 class="section-title mb-20"><span>Best</span> Services</h3>-->
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
							<a href="assets/pdf/Ramdev New Catlogue 11 06 2022 (1) (1).pdf#toolbar=1" target="_blank">	<img src="assets/imgs/banner/ProductBrochure (1).png" alt=""></a>
								<div class="banner-text">
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
								<img src="assets/imgs/banner/CorporateBrochure (2).png" alt="">
								<div class="banner-text">
									
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 d-md-none d-lg-flex">
							<div class="banner-img wow fadeIn animated  mb-sm-0">
							<a href="http://www.ramdevpcb.com/page-login-register.php" target="_blank">	<img src="assets/imgs/banner/B2B (1).PNG" alt=""></a>
								<div class="banner-text">
							
								</div>
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
								<button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Product Categories</button>
							</li>
						<!-- <li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
							</li>-->
						</ul>
						<a href="Products.php?id=all" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
					</div>
					<!--End nav-tabs-->
					<div class="tab-content wow fadeIn animated" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
							<div class="row product-grid-4">
								<?php
								//echo $_SESSION['use'];
								 if(isset($_SESSION['use'])) // If session is not set then redirect to Login Page
                                    {
								    
								    if(!empty($users['AssignedCategories'])){
										$query="SELECT * FROM BrandCategory WHERE is_deleted = '0' AND CategoryID IN ({$users['AssignedCategories']})";
									} else {
										$query="SELECT * FROM BrandCategory WHERE is_deleted = '0'";
									}
									$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
									while($row = mysqli_fetch_assoc($result)) {
										$image = !empty($row['CategoryImage']) ? $row['CategoryImage'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.png';
								?>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="Products.php?CategoryId=<?= $row['CategoryID'] ?>">
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
										<div class="product-content-wrap"  style="text-align:center;padding-top:2px">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2><a href="Products.php?CategoryId=<?= $row['CategoryID'] ?>"><?= $row['Category'] ?></a></h2>
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
								}
							        else{
							            
							            $query1="SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory";
								    $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
								    while($row = mysqli_fetch_assoc($result1)) {
								    $image = !empty($row['SubCategoryImage']) ? $row['SubCategoryImage'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.png';
								       ?>
								<div class="col-lg-3 col-md-4 col-12 col-sm-6">
									<div class="product-cart-wrap mb-30">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="Products.php?SubCategory=<?= $row['SubCategory'] ?>">
													<img class="default-img" src="<?= $image ?>" alt="<?= $userid ?>" >
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
										<div class="product-content-wrap" style="text-align:center;padding-top:2px">
											<!--<div class="product-category">
												<a href="Product_Details.php?id='.$id.'">'.$Category.'</a>
											</div>-->
											<h2><a href="Products.php?SubCategory=<?= $row['SubCategory'] ?>"><?= $row['SubCategory'] ?></a></h2>
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
							        }
								?>
							</div>
							<!--End product-grid-4-->
						</div>
						<!--En tab one (Featured)-->
						<div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
							<div class="row product-grid-4">
								
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
			<section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated"></h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">WHY RAMDEV PCB <br></h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Quick Turn Pcb Manufacturing
And Pcb Assembly Services </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                              <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Quality.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    PREMIUM QUALITY 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">A premium quality is a brand that markets and sells its products to customers at higher price levels in exchange for a higher quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;" >
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Innovative.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   INNOVATIVE PRODUCT
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Product innovation is the industry that is related to the development of innovative products, We commited to deliver innovative products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Accurate.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   ACCURATE SOLUTION 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">we are ready to provide Accurate & complete Solution from concept to commissioning in the area of Manufacturing industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Delivery.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    TIMELY DELIVERY 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">On time delivery, or OTD, is the metric used to measure supply chain efficiency.We have our associate for courier and transport.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Worker.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   EFFICIENT WORKERS 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Personal Toll of Working Too Hard. Hard workers can turn into workaholics if they’re not careful about their personal boundaries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Price.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                  PRICE & QUALITY
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Our aim is to provide quality goods at affordable prices and we never compromise quality. Price is what you pay, we value your money</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-12 text-center">
                        <p class="wow fadeIn animated">
                            <!--<a class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg">View More</a>-->
                        </p>
                    </div>
                </div>
            </div>
        </section>
			<!--<section class="popular-categories section-padding mt-15">
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
			</section>-->
			
			<section id="work" class="mt- pt- pb-50 section-borderdd">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">Ramdev Pcb</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Our Videos<br> </h2>
                        <!--<p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center mb-md-0 mb-4" target="_blank">
                        <a target="_blank"><iframe target="_blank" width="300" height="240" src="https://www.youtube.com/embed/fZBz_UffvyA" class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen;  ></iframe></a>
                        <h4 class="mt-30 mb-15 wow fadeIn animated" >LED EXPO</h4>
                        <!--<p class="text-grey-3 wow fadeIn animated">27 Division St, New York<br>NY 10002, USA</p>-->
                    </div>
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                      <iframe width="300" height="240" src="https://www.youtube.com/embed/jQ-pEY8L6H0" class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h4 class="mt-30 mb-15 wow fadeIn animated">RGB LED FLOOD LIGHT</h4>
                        <!--<p class="text-grey-3 wow fadeIn animated">22 Rue des Carmes<br> 75005 Paris</p>-->
                    </div>
                    <div class="col-md-4 text-center">
                       <iframe width="300" height="240" src="https://www.youtube.com/embed/gk0q4q-Xv4s" class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <h4 class="mt-30 mb-15 wow fadeIn animated"> PCB MOUNTING</h4>
                        <!--<p class="text-grey-3 wow fadeIn animated">2476 Raya Yogyakarta,<br>89090 Indonesia</p>-->
                    </div>
                </div>
            </div>
        </section>
		<section class="banners mb-20">
				<div class="container">
				    <h3 class="section-title mb-20"><span>Best</span> Services</h3>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
								<img src="assets/imgs/banner/banner-111.jpg" alt="">
								<div class="banner-text">
									<p class="text-grey-3"><i class="fi-rs-arrow-right"></i> Instant 30 mint. Quotation .<br><i class="fi-rs-arrow-right"></i> Two Hour Complaint Feedback . </p>
									<h4><!--Save 20% on --><br><!--Woman Bag--></h4>
									<!--<a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="banner-img wow fadeIn animated">
								<img src="assets/imgs/banner/banner-111.jpg" alt="">
								<div class="banner-text">
									<p class="text-grey-3"><i class="fi-rs-arrow-right"></i> Technical Support .<br><i class="fi-rs-arrow-right"></i> Order Service .<br><i class="fi-rs-arrow-right"></i> Production Run & Delivery . </p>
									<h4><!--Great Summer--> <br><!--Collection--></h4>
									<!--<a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
								</div>
							</div>
						</div>
						<div class="col-lg-4 d-md-none d-lg-flex">
							<div class="banner-img wow fadeIn animated  mb-sm-0">
								<img src="assets/imgs/banner/banner-111.jpg" alt="">
								<div class="banner-text">
									<p class="text-grey-3"><i class="fi-rs-arrow-right"></i> Door to Door Service with
	Demostic & International Freight . <br><i class="fi-rs-arrow-right"></i> Same Day Courier Services </p>
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
		<script src="assets/js/custom.js"></script>
		<script>
			var chatbox = document.getElementById('fb-customer-chat');
			chatbox.setAttribute("page_id", "2105228653038570");
			chatbox.setAttribute("attribution", "biz_inbox");
		</script>
		<!-- Your SDK code -->
		<script>
			window.fbAsyncInit = function() {
				FB.init({
					xfbml: true,
					version: 'v14.0'
				});
			};
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
			function deletecartitem(id){
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
		</script>
	</body>
</html>