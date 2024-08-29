<?php  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('db.php');
session_start();   // session starts with the help of this function 


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
        $query = "Select * from Users where UserEmailId='".$user."' and UserPassword='".$pass."'";
        $result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{   
    $getuserid = $row['UserID'];
    $getuser = $row['UserEmailId'];
    $getpass =$row['UserPassword'];
    $getuserrole =$row['UserRole'];
}

      if($user == $getuser && $pass == $getpass)  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;
          $_SESSION['userid']=$getuserid;
          $_SESSION['user_role'] =$getuserrole;


         echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "<script type='text/javascript'>window.location.href = 'page-login-register.php';alert('Invalid Username or Password');</script>";     
        }
}else if(isset($_POST['register'])){
    
    $queryy = "Select * from UserRoles where RoleID='2'";
	$users = mysqli_query($conn,$queryy);
		$user = mysqli_fetch_assoc($users);
		
		
		
	extract($_POST);
	$pass = "INSERT INTO Users ( UserFullName,UserEmailId,UserPassword,UserGSTNumber,UserAddress,StateID,CityID,UserMobileNumber,UserRole,AssignedCategories,RegisterDate) values 
	('$fullname','$email','$cpassword','$gst','$address','$state','$city','$mobile','$type','".$user['assigncat']."','".date('d-m-Y H:i:s')."')";


	$query = mysqli_query($conn,$pass);
	if($query){
		$last_id = mysqli_insert_id($conn);
		session_start();
		$_SESSION['use']=$fullname;
          $_SESSION['userid']=$last_id;	

          $_SESSION['user_role'] =2;

	echo '<script type="text/javascript"> window.open("index.php","_self");alert("Thank you For Joining Us, We will Notify you soon");</script>';
	}else{

	}


	
}

 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Get a Quote</title>
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
</head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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
</script>
<body>
   <?php
    include("header.php");
?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Login / Register
                </div>
            </div>
        </div>
        <br>
        <section class="featured section-padding">
				<div class="container">
				     <h3 class="section-title mb-20"><span>Join</span> Us..</h3>
					<div class="row">
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: aliceblue;">
								<img src="assets/imgs/theme/icons/B-B.png" alt="">
								<h4 class="g-1" style="background-color: #b09707;color: white;"> B-B access</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: cornsilk;">
								<img src="assets/imgs/theme/icons/RegularUpdates.png" alt="">
								<h4 class="g-3" style="background-color: #b09707;color: white;">Timely Updates</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: lavenderblush;">
								<img src="assets/imgs/theme/icons/BestDeal.png" alt="">
								<h4 class="g-2" style="background-color: #b09707;color: white;">Best Deal</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: aliceblue;">
								<img src="assets/imgs/theme/icons/GST Invoice.png" alt="">
								<h4 class="g-4" style="background-color: #b09707;color: white;">GST invoice</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: cornsilk;">
								<img src="assets/imgs/theme/icons/OnlinePayment.png" alt="">
								<h4 class="g-5" style="background-color: #b09707;color: white;">Online Payment</h4>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
							<div class="banner-features wow fadeIn animated hover-up animated" style="visibility: visible;background-color: lavenderblush;">
								<img src="assets/imgs/theme/icons/Delivery.png" alt="">
								<h4 class="g-2" style="background-color: #b09707;color: white;">Delivery</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="banners mb-20">
            <div class="container">
                <div class="row" style="place-content: center;">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-111.jpg" alt="">
                             <!--<div class="row" style="max-width: max-content;display: contents;">-->
                                 
                            <!--<a href="page-login-register.php" tabindex="-1" style="color: black;"><button class="btn">Click Here</button></a>-->
                            <!--</div>-->
                          <div class="banner-text">
                           <div class="row" style="float: left;">
                                <!--<span>Smart Offer</span>-->
                                <a href="page-login-register.php" tabindex="-1" style="color: black;"><h4>Individual login</h4></a>
                                </div>
                                 
                                 
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-111.jpg" alt="">
                            <!--<div class="row" style="max-width: max-content;display: contents;">-->
                          <!--<a href="page-login-register.php" tabindex="-1" style="color: black;">  <button class="btn">Click Here</button></a>-->
                            <!--</div>-->
                            <div class="banner-text">
                                 <div class="row" style="float: left;">
                                <!--<span>Sale off</span>-->
                               <a href="page-login-register.php" tabindex="-1" style="color: black;"> <h4>Corporate Login</h4></a>
                                 </div>
                                <div class="row">
                               
                               </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 d-md-none d-lg-flex">-->
                    <!--    <div class="banner-img wow fadeIn animated  mb-sm-0">-->
                    <!--        <img src="assets/imgs/banner/banner-3.png" alt="">-->
                    <!--        <div class="banner-text">-->
                    <!--            <span>New Arrivals</span>-->
                    <!--            <h4>Shop Today’s <br>Deals & Offers</h4>-->
                    <!--            <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
 <!--       <section class="banners mb-20">-->
	<!--			<div class="container">-->
				    <!--<h3 class="section-title mb-20"><span>Best</span> Services</h3>-->
	<!--				<div class="row" style="place-content: center;">-->
	<!--					<div class="col-lg-4 col-md-6">-->
	<!--						<div class="banner-img wow fadeIn animated">-->
	<!--						    <a class="animated btn btn-brush btn-brush-1" href="page-login-register.php" tabindex="-1" style="color: black;">Corporate Login</a>-->
								<!--<img src="assets/imgs/banner/banner-111.jpg" alt="">-->
	<!--							<div class="banner-text">-->
	<!--								<p class="text-grey-3"></p>-->
									<!--<h4>Corporate Login</h4>--><br>
									<!--<a class="animated btn btn-brush btn-brush-1" href="page-login-register.php" tabindex="-1" style="color: black;">Corporate Login</a>-->
								<!--<a href="" class="btn">Corporate Login <i class="fi-rs-arrow-right"></i></a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<br>-->
	<!--					<div class="col-lg-4 col-md-6">-->
	<!--						<div class="banner-img wow fadeIn animated">-->
	<!--						    	<a class="animated btn btn-brush btn-brush-2" href="page-login-register.php" tabindex="-1" style="color: black;"> Individual login</a>-->
								<!--<img src="assets/imgs/banner/banner-111.jpg" alt="">-->
	<!--							<div class="banner-text">-->
	<!--								<p class="text-grey-3"></p><br>-->
									<!--<a class="animated btn btn-brush btn-brush-2" href="page-login-register.php" tabindex="-1" style="color: black;"> Individual login</a>-->
										<!--<a href="" class="btn"> Individual login<i class="fi-rs-arrow-right"></i></a>-->
									<!--<h4> Individual login</h4>-->
									<!--<a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--					<div class="col-lg-4 d-md-none d-lg-flex">-->
	<!--						<div class="banner-img wow fadeIn animated  mb-sm-0">-->
	<!--							<img src="assets/imgs/banner/banner-111.jpg" alt="">-->
	<!--							<div class="banner-text">-->
	<!--								<p class="text-grey-3"><i class="fi-rs-arrow-right"></i> Door to Door Service with-->
	<!--Demostic & International Freight . <br><i class="fi-rs-arrow-right"></i> Same Day Courier Services </p>-->
	<!--								<h4><!--Shop Today’s --><br><!--Deals & Offers--><!--</h4>-->
								<!-- <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</section>-->
                               
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
                    <h5 class="mb-5">Loading...</h5>
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
	<script src="assets/js/custom.js"></script>
</body>

</html>