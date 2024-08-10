<?php  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    include('db.php');
session_start();   // session starts with the help of this function 




if(!empty($_SESSION['userid'])){
    $query="SELECT * FROM Users WHERE UserID=".$_SESSION['userid'];
    $result=mysqli_query($conn,$query);
    $user_details = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($user_details);
    // exit;

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
   include("Admin/subdb.php");
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
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row text-center justify-content-center">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Edit Profile</h3>
                                        </div>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="fullname" placeholder="Full Name" value="<?php echo $user_details['UserFullName']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" required="" name="email" placeholder="Email ID" value="<?php echo $user_details['UserEmailId']; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password" value="<?php echo $user_details['UserPassword']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="cpassword" placeholder="Confirm password" value="<?php echo $user_details['UserPassword']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="mobile" placeholder="Mobile number" value="<?php echo $user_details['UserMobileNumber']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="address" placeholder="Address" value="<?php echo $user_details['UserAddress']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-group state"  name="state" style="padding-left:20px;background: #fff;border: 1px solid #e2e9e1;height: 45px;">
                                                    <option selected>Select State</option>
                                                    <?php
                                                    
                                                            $sql=mysqli_query($conn,"SELECT * FROM States where CountryID='101'");
                                                            while($row=mysqli_fetch_array($sql))
                                                            {
                                                            $id=$row['StateID'];
                                                            $StateName=$row['StateName'];
                                                            $selected_opt = '';
                                                            if($user_details['StateID'] == $id){
                                                                $selected_opt = 'Selected';

                                                            }
                                                            echo '<option value="'.$id.'" '.$selected_opt.'>'.$StateName.'</option>';
                                                                                 
                                                            }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="city" id="City" style="padding-left:20px;background: #fff;border: 1px solid #e2e9e1;height: 45px;"></select>
                                            </div>
                                            <!-- <div class="form-group"> -->
                                                <!-- <input type="radio" name="type" style="height:15px;width:5%" value="1" >Bussiness
                                                <input type="radio"  name="type" style="height:15px;width:5%" value="2"checked>Individual
                                                </div> -->
                                                <input type="hidden" name="type" value="2">
                                            <!-- <div class="form-group">
                                                <input type="text" required="" name="gst" placeholder="GST No." maxlength="15">
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="register">Update</button>
                                            </div>
                                        </form>
                                     <!--  <div class="divider-text-center mt-15 mb-15">
                                            <span> </span>
                                        </div>-->
                                        <ul class="btn-login list_none text-center mb-15">
                                           <!-- <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                            <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>-->
                                        </ul>
                                       <!-- <div class="text-muted text-center">Already have an account? <a href="#">Sign in now</a></div>-->
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
</body>

</html>