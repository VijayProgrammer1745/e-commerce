<?php  
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
	require_once('db.php');
	session_start();
	if (isset($_SESSION['use'])) {
		header("Location: ./"); 
	}
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$query = "SELECT * FROM Users WHERE UserEmailId = '$user' AND UserPassword = '$pass'";
		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($result)) {
			$getuserid = $row['UserID'];
			$getuser = $row['UserEmailId'];
			$getpass =$row['UserPassword'];
			$getuserrole =$row['UserRole'];
			$getusercat = $row['AssignedCategories'];
			$getusermob = $row['UserMobileNumber'];
			$getusername= $row['UserFullName'];
		}
		if ($user == $getuser && $pass == $getpass) {
			$_SESSION['use'] = $user;
			$_SESSION['userid']= $getuserid;
			$_SESSION['user_role'] = $getuserrole;
			$_SESSION['SESS_USER_NAME'] = $getusername;
			$_SESSION['SESS_USER_EMAIL']    = $getuser;
			$_SESSION['SESS_USER_NUMBER']   = $getusermob;
			$_SESSION['SESS_USER_CATEGORY'] = $getusercat;
			echo '<script type="text/javascript"> window.open("./","_self");</script>';
		} else {
			echo "<script type='text/javascript'>window.location.href = 'page-login-register.php';alert('Invalid Username or Password');</script>";     
		}
	} else if (isset($_POST['register'])) {
		$queryy = "Select * from UserRoles where RoleID='2'";
		$users = mysqli_query($conn,$queryy);
		$user = mysqli_fetch_assoc($users);
		extract($_POST);
		$pass = "INSERT INTO Users ( UserFullName,UserEmailId,UserPassword,UserGSTNumber,UserAddress,StateID,CityID,UserMobileNumber,UserRole,AssignedCategories,RegisterDate) values 
		('$fullname','$email','$cpassword','$gst','$address','$state','$city','$mobile','$type','".$user['assigncat']."','".date('d-m-Y H:i:s')."')";
		$query = mysqli_query($conn,$pass);
		if ($query) {
			$last_id = mysqli_insert_id($conn);
			session_start();
			$_SESSION['use'] = $fullname;
			$_SESSION['userid'] = $last_id;
			$_SESSION['user_role'] = 2;
			$toemail = $email;
			$sendmail="welcome";
			include("email.php");
			echo '<script type="text/javascript"> window.open("index.php","_self");alert("Thank you For Joining Us, We will Notify you soon");</script>';
		}
	}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Ramdev PCB</title>
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
		<script language="Javascript">
			function hideA() {
				document.getElementById("A").style.visibility="hidden";
				document.getElementById("B").style.visibility="visible";
				document.getElementById("C").style.visibility="visible";
			}
			function hideB() {
				document.getElementById("C").style.visibility="hidden";
				document.getElementById("B").style.visibility="hidden";
				document.getElementById("A").style.visibility="visible";
			}
		</script>
	</head>
	<body>
		<?php
			include("header.php");
		?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb"><a href="index.html" rel="nofollow">Home</a><span></span> Pages <span></span> Login / Register</div>
				</div>
			</div>
			<section class="pt-150 pb-150">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 m-auto">
							<div class="row">
								<div class="col-lg-5">
									<div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
										<div class="padding_eight_all bg-white">
											<div class="heading_s1">
												<h3 class="mb-30">Login</h3>
											</div>
											<form action="" method="post">
												<div class="form-group">
													<input type="text" required="" name="user" placeholder="Your Email" />
												</div>
												<div class="form-group">
													<input required="" type="password" name="pass" placeholder="Password" />
												</div>
												<div class="login_footer form-group">
													<div class="chek-form">
														<div class="custome-checkbox">
															<input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
															<label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
														</div>
													</div>
													<a class="text-muted" href="#">Forgot password?</a>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-lg-1"></div>
								<div class="col-lg-6">
									<div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
										<div class="padding_eight_all bg-white">
											<div class="heading_s1">
												<h3 class="mb-30">Create an Account</h3>
											</div>
											<p class="mb-50 font-sm">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
											<form action="" method="post">
												<div class="row" style="text-align: -webkit-center;">
													<div class="col-md-6"><input type="radio" id="contactChoice1" name="contact" value="email" style="width: 18px;margin-top: -10px;height:12px" onClick="hideB()" checked> INDIVIDUAL</div>
													<div class="col-md-6"><input type="radio" id="contactChoice2" name="contact" value="phone" style="margin-left: auto;width: 18px;margin-top: -10px;height:12px" onClick="hideA()"> CORPORATE</div>
												</div>
												<div class="row">
													<div class="form-group" style="visibility:hidden" id="B">
														<input type="text" required="true" name="fullname" placeholder="Buisness Name" />
													</div>
													<div class="form-group"  style="visibility:hidden" id="C">
														<input type="text" required="true" name="gst" placeholder="GST number" >
													</div>
													<div class="form-group" id="A" >
														<input type="text" required="true" name="fullname" placeholder="Full Name" <?php echo " $('input:texti).attr('placeholder','Full Name New Buisness Name');" ?> />
													</div>
												</div>
												<div class="form-group">
													<input type="email"  name="email" placeholder="Email ID" />
												</div>
												<div class="form-group">
													<input type="text" required="true" name="mobile" placeholder="Mobile number" />
												</div>
												<div class="form-group">
													<input required="" type="password" name="password" placeholder="Password" maxlength="6" />
												</div>
												<div class="form-group">
													<input required="" type="password" name="cpassword" placeholder="Confirm password" />
												</div>
												<div class="form-group">
													<input type="text" required="" name="address" placeholder="Address" />
												</div>
												<div class="form-group">
													<select class="form-group state"  name="state" style="padding-left:20px;background: #fff;border: 1px solid #e2e9e1;height: 45px;">
														<option selected>Select State</option>
														<?php
															$sql=mysqli_query($conn,"SELECT * FROM States where CountryID='101'");
															while ($row=mysqli_fetch_array($sql)) {
																$id = $row['StateID'];
																$StateName = $row['StateName'];
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
												<input type="hidden" name="type" value="2" />
												<div class="login_footer form-group">
													<div class="chek-form">
														<div class="custome-checkbox">
															<input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
															<label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-fill-out btn-block hover-up" name="register">Submit &amp; Register</button>
												</div>
											</form>
											<ul class="btn-login list_none text-center mb-15"></ul>
										</div>
									</div>
								</div>
							</div>
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
		<script>
			$(document).ready(function() {
				$("select.state").change(function() {
					var selectedState = $(".state option:selected").val();
					$.ajax({
						type: "POST",
						url: "getcity.php",
						data: { State : selectedState }
					}).done(function(data) {
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
		</script>
	</body>
</html>