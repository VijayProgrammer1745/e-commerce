 <style>
 
 @font-face {
  font-family: "Material Icons Round";
  font-style: normal;
  font-weight: 400;
  font-display: block;
  src: url("admin.ramdevpcb.com/assets/iconfonts/materialdesignicons/mi/MaterialIcons-Round.ttf");
  /* For IE6-8 */
  src: url("admin.ramdevpcb.com/assets/iconfonts/materialdesignicons/mi/MaterialIcons-Round.woff2") format("woff2"), url("admin.ramdevpcb.com/assets/iconfonts/materialdesignicons/mi/MaterialIcons-Round.woff") format("woff"), url("admin.ramdevpcb.com/assets/iconfonts/materialdesignicons/mi/MaterialIcons-Round.ttf") format("truetype");
}

.material-icons {
  font-family: "Material Icons Round";
  font-weight: normal;
  font-style: normal;
  font-size: 22px;
  vertical-align: middle;
  display: inline-block;
  line-height: 0.9;
  text-transform: none;
  letter-spacing: normal;
  -ms-word-wrap: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}

.material-icons:before {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  opacity: .3;
}

.material-icons:after {
  opacity: 1;
  line-height: normal;
}

 /*Order Tracking*/
.order-tracking .steps .step {
  display: block;
  width: 100%;
  margin-bottom: 35px;
  text-align: center;
}

.order-tracking .steps .step .step-icon-wrap {
  display: block;
  position: relative;
  width: 100%;
  height: 80px;
  text-align: center;
}

.order-tracking .steps .step .step-icon-wrap::before,
.order-tracking .steps .step .step-icon-wrap::after {
  display: block;
  position: absolute;
  top: 50%;
  width: 50%;
  height: 3px;
  margin-top: -1px;
  background-color: #e1e7ec;
  content: '';
  z-index: 1;
}

.order-tracking .steps .step .step-icon-wrap::before {
  left: 0;
}

.order-tracking .steps .step .step-icon-wrap::after {
  right: 0;
}

.order-tracking .steps .step .step-icon {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  border: 1px solid #e1e7ec;
  border-radius: 50%;
  background-color: #f5f5f5;
  color: #374250;
  font-size: 38px;
  line-height: 72px;
  z-index: 5;
}

.order-tracking .steps .step .step-title {
  margin-top: 16px;
  margin-bottom: 0;
  color: #606975;
  font-size: 14px;
  font-weight: 500;
}

.order-tracking .steps .step:first-child .step-icon-wrap::before {
  display: none;
}

.order-tracking .steps .step:last-child .step-icon-wrap::after {
  display: none;
}

.order-tracking .steps .step.completed .step-icon-wrap::before,
.order-tracking .steps .step.completed .step-icon-wrap::after {
  background-color: #b8a62b;
}

.order-tracking .steps .step.completed .step-icon {
  border-color: #b8a62b;
  background-color: #b8a62b;
  color: #fff;
}

.order-tracking .steps .step.completed .step-icon:hover {
  background-color: #046963;
}

.md-local_shipping:after {
  content: '\e3bb';
}

@media (max-width: 576px) {
  .order-tracking .flex-sm-nowrap .step .step-icon-wrap::before,
  .order-tracking .flex-sm-nowrap .step .step-icon-wrap::after {
    display: none;
  }
}

@media (max-width: 768px) {
  .order-tracking .flex-md-nowrap .step .step-icon-wrap::before,
  .order-tracking .flex-md-nowrap .step .step-icon-wrap::after {
    display: none;
  }
}

@media (max-width: 991px) {
  .order-tracking .flex-lg-nowrap .step .step-icon-wrap::before,
  .order-tracking .flex-lg-nowrap .step .step-icon-wrap::after {
    display: none;
  }
}

@media (max-width: 1200px) {
  .order-tracking .flex-xl-nowrap .step .step-icon-wrap::before,
  .order-tracking .flex-xl-nowrap .step .step-icon-wrap::after {
    display: none;
  }
}

.order-tracking .bg-faded, .order-tracking .bg-secondary {
  background-color: #f5f5f5 !important;
}
 
 .animated{
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.slideInUp{
        -webkit-animation-name: slideInUp;
    animation-name: slideInUp;
}

@-webkit-keyframes slideInUp{from{
    -webkit-transform:translate3d(0,100%,0);
    transform:translate3d(0,100%,0);
    visibility:visible}
    to{-webkit-transform:translate3d(0,0,0);
    transform:translate3d(0,0,0)}}
    
@keyframes slideInUp{from{-webkit-transform:translate3d(0,100%,0);
transform:translate3d(0,100%,0);
visibility:visible}
to{-webkit-transform:translate3d(0,0,0);
transform:translate3d(0,0,0)}}
.slideInUp{-webkit-animation-name:slideInUp;animation-name:slideInUp}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 111; /* Sit on top */
    padding-top: 120px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto;  Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    text-align: -webkit-center;
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    text-align: -webkit-left;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
}

/* The Close Button */
.close {
    color: #040404;
    float: right;
    font-size: 28px;
    font-weight: bold; text-lef
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

@media screen and (max-width: 600px){
    .modal-content {
        width:80%;
         /*position:fixed;*/
   top:auto;
   right:auto;
   left:auto;
   bottom:0;
    }
  }
  
  .completed > .step-title{
      color:#b8a62b!important;
  }

</style>

<div id="trackmodal" class="modal ">
  <!-- Modal content -->
  <div class="modal-content animated slideInUp text-left">
      <div class="row" style="text-align: right;"><span class="close" onclick="trackclose()"  style="float: inline-end;">×</span> </div>
  <div class="order-tracking" style="font-size:20px;text-align:center">
      <h3>ORDER ID : RAMDEVPCB123456</h3><br>
                        <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><span style="font-size:24px" class="fi-rs-shopping-cart-check"></span></div>
                                </div>
                                <h4 class="step-title">Confirmed<br>Order</h4>
                                <small class="text-muted text-sm"></small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><span style="font-size:24px" class="fi-rs-refresh"></span></div>
                                </div>
                                <h4 class="step-title">Processing<br>Order</h4>
                                <small class="text-muted text-sm"></small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><span style="font-size:24px" class="fi-rs-box"></span></div>
                                </div>
                                <h4 class="step-title">Order<br>Packed</h4>
                                <small class="text-muted text-sm"></small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><span style="font-size:24px" class="material-icons md-local_shipping"></span></div>
                                </div>
                                <h4 class="step-title">Product<br>Shipped</h4>
                                <small class="text-muted text-sm"></small>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><span style="font-size:24px" class="fi-rs-check"></span></div>
                                </div>
                                <h4 class="step-title">Product<br>Delivered</h4>
                                <small class="text-muted text-sm"></small>
                            </div>
                        </div>
                    </div>
  </div>

</div>
 <script>
var modal1 = document.getElementById('trackmodal');
var span = document.getElementsByClassName("close")[0];
function trackmodal(id)
{
	//alert(id);
	modal1.style.display = "block";
}
function trackclose()
{
		modal1.style.display = "none";
}
// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        	modal1.style.display = "none";
    }
}
</script>  






   <!-- <script src="js/components-modal.min.js"></script>-->
