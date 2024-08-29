<?php
	$assigned_categories = '';
	if (isset($_SESSION['SESS_USER_CATEGORY'])) {
		$assigned_categories = $_SESSION['SESS_USER_CATEGORY'];
	}
?>
<header class="header-area header-style-3 header-height-2">
	<div class="header-top header-top-ptb-1 d-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-3 col-lg-4">
					<div class="header-info">
						<ul>
							<li><i class="fi-rs-smartphone"></i> <a href="#">+91 8655252402</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4">
					<div class="text-center">
						<div id="news-flash" class="d-inline-block"></div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="header-info header-info-right">
						<ul>
							<?php
								if (isset($_SESSION['use'])) {
							?>
							<li>
								<i class="fi-rs-user"></i>
								<a><?= $_SESSION['SESS_USER_NAME'] ?></a>
							</li>
							<li>
								<i class="fi-rs-user-remove"></i>
								<a href="logout.php">Logout</a>
							</li>
							<?php
								} else {
							?>
							<li>
								<i class="fi-rs-user"></i>
								<a href="page-login-register.php">Log In / Sign Up</a>
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
	<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
		<div class="container">
			<div class="header-wrap">
				<div class="logo logo-width-1">
					<a href="./">
						<img src="assets/imgs/logo/logo-1.png" alt="logo" style="min-width:130px"/>
					</a>
				</div>
				<div class="header-right">
					<div class="search-style-2">
						<form action="#">
							<!--<select class="select-active">
								<?php
									$sql = mysqli_query($conn,"SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory");
									while ($row = mysqli_fetch_array($sql)) {
										$subcategory = $row['SubCategory'];
								?>
								<option value="<?= $subcategory ?>" <?= (($subcategory == $subcategory) ? 'selected="selected"' :"") ?>><?= $subcategory ?></option>
								<?php
									}
								?>
							</select>-->
							<input type="text" class="search-input" placeholder="Search for items..." />
							<div class="search-box"></div>
						</form>
					</div>
					<div class="header-action-right">
						<div class="header-action-2">
							<div class="header-action-icon-2">
								<a class="mini-cart-icon" href="#">
									<img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg" />
									<?php 
										$id = !empty($_SESSION['userid']) ? $_SESSION['userid'] : '0';
										$query = "SELECT * FROM BrandModel m, BrandCategory c, BrandSubCategory sc, Cart ca, productdetails pd, ProductColors co WHERE pd.ProductID = ca.ProductID AND m.ModelID = pd.ModelID AND c.CategoryID = pd.CategoryID AND co.ColorID = pd.ProductColorID AND sc.SubCategoryID = pd.SubCategoryID AND ca.UserID = '$id'";
										$result=mysqli_query($conn,$query);
										$count = mysqli_num_rows($result);
									?>
									<span class="pro-count blue"><?php echo $count ?></span>
								</a>
								<div class="cart-dropdown-wrap cart-dropdown-hm2">
									<?php
										if ($count == '0') {
									?>
									<div style="text-align:center">
									<p class="">
											<img src="assets/imgs/theme/cart.jpg" alt="" class="hover-up" width="100px" />
										</p>
										<h4 style="margin-bottom:6px">Your Cart is Empty</h4>
										<p style="font-size:12px;margin-bottom: 10px;">Looks like you have not added anything to your cart. Go ahead & explore top categories.</p>
										<form class="contact-form-style text-center" id="contact-form" action="#" method="post">
											<a class="btn btn-default submit-auto-width font-xs hover-up" href="Products.php?id=all" style="padding:5px">View Products</a>
										</form>
									</div>
									<?php
										} else {
									?>
									<ul>
										<?php
											$subtotal_price = 0;
											while($row=mysqli_fetch_array($result)) {
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
												$imagesss = mysqli_query($conn, "SELECT * FROM productimages WHERE ProductID = '{$row['ProductID']}'") or die(mysqli_error($conn));
												$img = mysqli_fetch_assoc($imagesss);
												$imagess = (!empty($img['ImageName'])) ? $img['ImageName'] : 'https://admin.ramdevpcb.com/assets/images/product_images/default_product.jpg';
												$subtotal_price += $price * $row['ProductQuantity'];
										?>
										<li>
											<div class="shopping-cart-img" style="flex: 0 0 60px;">
												<a href="shop-product-right.html"><img alt="Evara" src="<?= $imagess ?>"></a>
											</div>
											<div class="shopping-cart-title">
												<h5>
													<a href="Product_Details.php?id=<?= $row['ProductID'] ?>"><?= $row['Model_No'] ?></a>
												</h5>
												<h6 style="margin-bottom:8px"><?= $row['Watts'] . '-' . $row['Driver'] ?></h6>
												<h5><span><?= $row['ProductQuantity'] ?> × </span>&#8377;<?= number_format($price, 2) ?></h5>
											</div>
											<div class="shopping-cart-delete">
												<a href="#" onclick="deletecartitem('<?= $row['CartID'] ?>')"><i class="fi-rs-trash" style="font-size:16px"></i></a>
											</div>
										</li>
										<?php
											}
										?>
									</ul>
									<div class="shopping-cart-footer">
										<div class="shopping-cart-total">
											<h4>Total <span>&#8377;<?= number_format($subtotal_price, 2) ?></span></h4>
										</div>
										<div class="shopping-cart-button">
											<a href="shopcart.php" class="outline">View cart</a>
											<a href="checkout.php">Checkout</a>
										</div>
									</div>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom header-bottom-bg-color sticky-bar">
		<div class="container">
			<div class="header-wrap header-space-between position-relative  main-nav">
				<div class="logo logo-width-1 d-block d-lg-none">
					<a href="index.php"><img src="assets/imgs/logo/logo-1.png" alt="logo"></a>
				</div>
				<div class="header-nav d-none d-lg-flex">
					<div class="main-categori-wrap d-none d-lg-block">
						<a class="categori-button-active" href="#">
							<span class="fi-rs-apps"></span> Browse Categories
						</a>
						<div class="categori-dropdown-wrap categori-dropdown-active-large">
							<ul>
								<?php
									$sql=mysqli_query($conn,"SELECT * FROM BrandSubCategory WHERE is_deleted = '0' GROUP BY SubCategory DESC");
									while ($row=mysqli_fetch_array($sql)) {
									$subcategory=$row['SubCategory'];
								?>
								<li class="has-children">
									<a href="shop-grid-right.php"><i class="fa fa-user"></i><?= $subcategory ?></a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-7">
												<ul class="d-lg-flex">
													<li class="mega-menu-col col-lg-6">
														<ul>
															<?php
																$sql1=mysqli_query($conn,"Select * from BrandModel A inner join BrandSubCategory B on A.SubCategoryID=B.SubCategoryID where B.SubCategory='".$subcategory."' group by A.Model");
																while ($row1=mysqli_fetch_array($sql1)) {
																$model=$row1['Model'];
															?>
															<li><a class="dropdown-item nav-link nav_item" href="Products.php?Model=<?= $model ?>"><?= $model ?></a></li>
															<?php
																}
															?>
														</ul>
													</li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-5">
												<div class="header-banner2">
													<img src="<?= $row['SubCategoryImage']?>" alt="menu_banner1" style="">
												</div>
											</li>
										</ul>
									</div>
								</li>
								<?php
									}
								?>
							</ul>
							<div class="more_categories">Show more...</div>
						</div>
					</div>
					<div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
						<nav>
							<style>
								#active{
								color:#b79907
								}
							</style>
							<?php
								$activePage = basename($_SERVER['PHP_SELF'], ".php");
							?>
							<ul>
								<li>
									<a href="index.php" id="<?= ($activePage == 'index') ? 'active':''; ?>">Home</a>
								</li>
								<li>
									<a href="about.php" id="<?= ($activePage == 'about') ? 'active':''; ?>">About Us</a>
								</li>
								<li>
									<a href="Products.php?id=all" id="<?= ($activePage == 'Products') ? 'active':''; ?>">Products</a>
								</li>
								<li>
									<a href="purchase-guide.php" id="<?= ($activePage == 'purchase-guide') ? 'active':''; ?>">Purchase Guide</a>
								</li>
								<li>
									<a href="qnow.php" id="<?= ($activePage == 'qnow') ? 'active':''; ?>">Get Quote</a>
								</li>
								<li>
									<a href="contact.php" id="<?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
								</li>
								<?php
									if (!empty($_SESSION['userid'])) {
								?>
								<!--<li>
									<a href="editProfile.php" id="<?= ($activePage == 'editProfile') ? 'active':''; ?>">My Profile</a>
								</li>
								<li>
									<a href="myorders.php" id="<?= ($activePage == 'myorders') ? 'active':''; ?>">My Orders</a>
								</li>
								<li>
									<a href="shopcart.php" id="<?= ($activePage == 'shopcart') ? 'active':''; ?>">My Cart</a>
								</li>-->
								<li>
									<a href="my-account.php" id="<?= ($activePage == 'my-account') ? 'active':'' ?>">My Account</a>
								</li>
								<?php
									}
								?>
							</ul>
						</nav>
					</div>
				</div>
				<div class="hotline d-none d-lg-block">
					<!-- <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p>-->
				</div>
				<p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
				<div class="header-action-right d-block d-lg-none">
					<div class="header-action-2">
						<div class="header-info header-info-right">
							<ul>
								<li>
									<a href="page-login-register.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACpklEQVRoge2Zy2oUQRSGv0y0g5qFElwJgjvjKygoiDqKBI0MWSgugi4Cgoss4g2JbnQRfANdeXkAcZVXCBpRZMZLjEJw4UaZeE2cdnFO0S2ZGburqqdb7A+aGnrq/PWfnqmu011QUvLPEABjwAOgDizrUQfu63dBbu4SUgMWgPAvxxvgRE4eu9IP3CIy+hg4BwwDm/QY1nNPYv1mNLYwmCS+AeNAX5e+FeCM9jXJFIIaYugrsDtF3B6iZEYz8JWKgGhOjFvEn9XY1+R8AxgjmhMVi/gKMK8aNRcjNoPHOa7tbaBlEd8C7ujnY45enGggV3Ong8Yu1ah7cWRJU00MOmgMqkbTiyNLzHqQu47rHCkMZSJFo0ykaLgm8lnbzQ4aW7T95GLENZH32u5w0DCxiy5GXBN5pu1+Bw0T+9zRixOHkYWsgX3R+FI1qh59paYfKcFDYMoi/oLGvqIAT4r7kCr2B+muahX4CfwC9mbgy4rryJVdASYS9J/QviFwLUNfVkyRvPgz/W5m6siBtIl4o1zZi0aZSBu2avs9QV/TZ8jj+F6oAm+RCfwwQf9HRAvhoQx9JSIATgFzRHeheWBbgtjtwItY3Jxq9fQl3RBwEViKGfkATAIDKXQ2AleAjzGdJdXO9C8XAOeR5wYzcEPPbXDQHQBOI5W00W0C0466bTnIn/ses3qu21v3tPQh82U2Ns474IivAS4jhV2IXLVeTM4DwFMds4X8Ok5Mq9gqcJXeltoV4BJRcXnDVmgEuRoryFv3vBhFyv0W0UvzxARE64LNA5NvJhEvi6S8RZ/UwAVgvX9fqVmHbKCGyHqzhk4lyoi2d5G/Vt6sAvf089E0gSb73MuHGFWibbo1dFoHlpEt5SLyhTb7MZ0S8fr0lgE+F+KSkv+C3/CHsHgox+CnAAAAAElFTkSuQmCC" style="width: 27px;margin-top: 4px;"></a>
								</li>
							</ul>
						</div>
						<?php
							$userId = '';
							if (isset($_SESSION['userid'])) {
								$userId = $_SESSION['userid'];
							}
							$query = "SELECT count(CartID) FROM Cart WHERE UserID = '$userId' AND AddedDate =''";
							$result=mysqli_query($conn, $query);
							while($row=mysqli_fetch_array($result)) {
								$count = $row['count(CartID)']; 
							}
						?>
						<div class="header-action-icon-2">
							<a class="mini-cart-icon" href="shopcart.php">
								<img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg" />
								<span class="pro-count white"><?= $count ?></span>
							</a>
						</div>
						<div class="header-action-icon-2 d-block d-lg-none">
							<div class="burger-icon burger-icon-white">
								<span class="burger-icon-top"></span>
								<span class="burger-icon-mid"></span>
								<span class="burger-icon-bottom"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
	<div class="mobile-header-wrapper-inner">
		<div class="mobile-header-top">
			<div class="mobile-header-logo">
				<a href="index.php"><img src="assets/imgs/theme/RamdevLogo.jpg" alt="logo"></a>
			</div>
			<div class="mobile-menu-close close-style-wrap close-style-position-inherit">
				<button class="close-style search-close">
					<i class="icon-top"></i>
					<i class="icon-bottom"></i>
				</button>
			</div>
		</div>
		<div class="mobile-header-content-area">
			<div class="mobile-search search-style-3 mobile-header-border">
				<form action="#">
					<input type="text" class="search-input" placeholder="Search for items…">
					<button type="submit"><i class="fi-rs-search"></i></button>
					<div class="search-box"></div>
				</form>
			</div>
			<div class="mobile-menu-wrap mobile-header-border">
				<!-- mobile menu start -->
				<nav>
					<ul class="mobile-menu">
						<li class="menu-item-has-children">
							<span class="menu-expand"></span>
							<a href="./">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						</li>
						<li>
							<a href="Products.php?id=all">Product</a>
						</li>
						<li>
							<a href="purchase-guide.php">Purchase Guide</a>
						</li>
						<li>
							<a href="qnow.php">Get Quote</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="myorders.php">My Orders</a>
						</li>
						<li>
							<a href="shopcart.php">My Cart</a>
						</li>
					</ul>
				</nav>
				<!-- mobile menu end -->
			</div>
			<div class="mobile-header-info-wrap mobile-header-border">
				<div class="single-mobile-header-info mt-30">
					<a href="contact.html">Our location</a>
				</div>
				<?php
					if (isset($_SESSION['use'])) {
				?>
				<div class="single-mobile-header-info">
					<a><?= $_SESSION['use'] ?></a>
				</div>
				<div class="single-mobile-header-info">
					<a href="logout.php">Logout</a>
				</div>
				<?php
					} else {
				?>
				<div class="single-mobile-header-info">
					<a href="page-login-register.php">Log In / Sign Up </a>
				</div>
				<?php
					}
				?>
			</div>
			<div class="mobile-social-icon">
				<h5 class="mb-15 text-grey-4">Follow Us</h5>
				<a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
				<a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
			</div>
		</div>
	</div>
</div>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>
<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>