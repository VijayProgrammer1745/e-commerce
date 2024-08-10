<?php
	require_once 'db.php';
	session_start();
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
		<?php include("header.php"); ?>
		<main class="main">
			<div class="page-header breadcrumb-wrap">
				<div class="container">
					<div class="breadcrumb"><a href="index.php" rel="nofollow">Home</a><span></span> My Account</div>
				</div>
			</div>
			<section class="mt-50 mb-50">
				<div class="container">
					<div class="row"></div>
				</div>
			</section>
		</main>
		<?php include("footer.php"); ?>
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