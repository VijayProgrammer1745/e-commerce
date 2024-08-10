

<?php
//$email_to="sneharajput@csismtechnologies.com";

$to = $toemail;
$fullnames = $username;


$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Ramdev PCB <info@technologies.com>' . "\r\n";
if($sendmail == "welcome"){
    $subject = "Welcome to Ramdev PCB";
    $message = 
 "<html>
<body style=\"background-color:#fff; font-size:16px; text-decoration: none; font-family:'calibri'\">
    	<div style=\"max-width: 600px; min-width:200px; background-color: #fff; padding:20px; margin:auto\">
    	
    	



<div id=\"content\" style=\"font-size:16px; padding:25px; background-color:#fff; moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;padding-bottom: 0; border-color: #b09707; border-width: 4px 1px; border-style:solid;\">
  <div style=\"text-align:center\">
  <img src=\"http://ramdevpcb.com/assets/imgs/theme/RamdevLogo.jpg\" style=\"width:35%;\">
  </div>
 <p>Dear ".$fullnames.",
 <br><br>
 We’re glad to have you onboard with Ramdev PCB. The most trusted name in PCB Manufacturer business and now we’re ready to serve you and your business. To get started, please log into your account <a href=\"https://www.ramdevpcb.com/page-login-register.php\" target=\"_blank\">here</a>.
<br>
<br>
We look forward to hearing from you soon!
<br><br>
Best regards,
<br>
Ramdev PCB,<br>
PCB Manufacturer</p>



<br>
<br>
<div style=\"text-align:center\" >
    <a href=\"https://ramdevpcb.com\" target=\"_blank\">
<button style=\"background-color: #b09707; padding: 10px 25px 10px 25px; border: 2px solid #dbca19; color:white;\"><b>VISIT US</b></button></a>
</div>
<h3 style=\"font-family: unset;
    font-style: italic;
    text-align: center;
    color: rgb(111,111,111);
        margin-top: 50px;\"> Stay In Touch </h3>
<p style=\"text-align:center; margin-top:-10px; \">

    <!-- FACEBOOK-->
    <a href=\"https://www.facebook.com/ramdevpcb\" target=\"_blank\" style=\"text-decoration: none;\">
       <img src=\"https://www.citypng.com/public/uploads/preview/-11595326936asbkomoamd.png\" style=\"width:30px\">
</a>
&nbsp;

<!--YOUTUBE-->
<a href=\"https://www.youtube.com/channel/UCFP80Vky14QWlCZtOcG2HBg/videos\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci3.googleusercontent.com/proxy/mPcIHyJdZhWWXM2C59iorpToez6bZpBDovq4BAx5RCVLCPcJFZm_vltlHectWxgMDDiZe-4rQOIOhTzYg2PugMnJe836gJx_z04QEKWWnD7Xrf6qOuo=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/youtube.png\" style=\"width:30px\"></a>
&nbsp;

<!--INSTAGRAM-->
<a href=\"https://www.instagram.com/ramdevpcb_vasai/\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci4.googleusercontent.com/proxy/UfyJpVcccZD3hgPZqRQbq28YwgzlR1IXn-__CtkVbpJW3yVArZ1lKbPuyuSN6ojoOwPFhaDXaBQQBEtV9ACm8DT4fMnBAjXTdBxzION0sDv2iagjp8MHPA=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png\" style=\"width:30px\"></a></p>
<br>

</div>
</div>
 
</body>
</html>";
}
else if($sendmail == "orderconfirm"){
// Order Confirmation
$subject='Order Confirmation Ramdev PCB';
$message = 
 "<html>
<body style=\"background-color:#fff; font-size:16px; text-decoration: none; font-family:'calibri'\">
    	<div style=\"max-width: 600px; min-width:200px; background-color: #fff; padding:20px; margin:auto\">
    	
    	



<div id=\"content\" style=\"font-size:16px; padding:25px; background-color:#fff; moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;padding-bottom: 0; border-color: #b09707; border-width: 4px 1px; border-style:solid;\">
  <div style=\"text-align:center\">
  <img src=\"http://ramdevpcb.com/assets/imgs/theme/RamdevLogo.jpg\" style=\"width:35%;\">
  </div>
 <p>Hello ".$fullnames.",<br><br>
Thank you for shopping with us!<br>
We have received your order request and your order id ".$orderNumber." has been accepted and processed. <br><br>
Ramdev PCB,<br>
PCB Manufacturer</p>



<br>
<br>
<div style=\"text-align:center\" >
    <a href=\"https://ramdevpcb.com\" target=\"_blank\">
<button style=\"background-color: #b09707; padding: 10px 25px 10px 25px; border: 2px solid #dbca19; color:white;\"><b>VISIT US</b></button></a>
</div>
<h3 style=\"font-family: unset;
    font-style: italic;
    text-align: center;
    color: rgb(111,111,111);
        margin-top: 50px;\"> Stay In Touch </h3>
<p style=\"text-align:center; margin-top:-10px; \">

    <!-- FACEBOOK-->
    <a href=\"https://www.facebook.com/ramdevpcb\" target=\"_blank\" style=\"text-decoration: none;\">
       <img src=\"https://www.citypng.com/public/uploads/preview/-11595326936asbkomoamd.png\" style=\"width:30px\">
</a>
&nbsp;

<!--YOUTUBE-->
<a href=\"https://www.youtube.com/channel/UCFP80Vky14QWlCZtOcG2HBg/videos\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci3.googleusercontent.com/proxy/mPcIHyJdZhWWXM2C59iorpToez6bZpBDovq4BAx5RCVLCPcJFZm_vltlHectWxgMDDiZe-4rQOIOhTzYg2PugMnJe836gJx_z04QEKWWnD7Xrf6qOuo=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/youtube.png\" style=\"width:30px\"></a>
&nbsp;

<!--INSTAGRAM-->
<a href=\"https://www.instagram.com/ramdevpcb_vasai/\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci4.googleusercontent.com/proxy/UfyJpVcccZD3hgPZqRQbq28YwgzlR1IXn-__CtkVbpJW3yVArZ1lKbPuyuSN6ojoOwPFhaDXaBQQBEtV9ACm8DT4fMnBAjXTdBxzION0sDv2iagjp8MHPA=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png\" style=\"width:30px\"></a></p>
<br>

</div>
</div>
 
</body>
</html>";    
}
else if($sendmail == "orderreadycourier"){
//order ready
$subject ="Your order is ready!";
$message="<html>
<body style=\"background-color:#fff; font-size:16px; text-decoration: none; font-family:'calibri'\">
    	<div style=\"max-width: 600px; min-width:200px; background-color: #fff; padding:20px; margin:auto\">
    	
    	



<div id=\"content\" style=\"font-size:16px; padding:25px; background-color:#fff; moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;padding-bottom: 0; border-color: #b09707; border-width: 4px 1px; border-style:solid;\">
  <div style=\"text-align:center\">
  <img src=\"http://ramdevpcb.com/assets/imgs/theme/RamdevLogo.jpg\" style=\"width:35%;\">
  </div>
 <p>Hello ".$fullnames.",<br><br>
We're happy to tell you that your order has been completed and shipped!<br>
The tracking ID for your shipment is X8094838 and can be tracked online using the link below.<br>
<a href=\"LINK\">LINK</a><br><br>
We hope you enjoy your purchase and we thank you for choosing Ramdev PCB.<br>
Feel free to contact us if you have any questions or comments, we are always happy.<br><br>
Ramdev PCB,<br>
PCB Manufacturer
</p>



<br>
<br>
<div style=\"text-align:center\" >
    <a href=\"https://ramdevpcb.com\" target=\"_blank\">
<button style=\"background-color: #b09707; padding: 10px 25px 10px 25px; border: 2px solid #dbca19; color:white;\"><b>TRACK NOW</b></button></a>
</div>
<h3 style=\"font-family: unset;
    font-style: italic;
    text-align: center;
    color: rgb(111,111,111);
        margin-top: 50px;\"> Stay In Touch </h3>
<p style=\"text-align:center; margin-top:-10px; \">

    <!-- FACEBOOK-->
    <a href=\"https://www.facebook.com/ramdevpcb\" target=\"_blank\" style=\"text-decoration: none;\">
       <img src=\"https://www.citypng.com/public/uploads/preview/-11595326936asbkomoamd.png\" style=\"width:30px\">
</a>
&nbsp;

<!--YOUTUBE-->
<a href=\"https://www.youtube.com/channel/UCFP80Vky14QWlCZtOcG2HBg/videos\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci3.googleusercontent.com/proxy/mPcIHyJdZhWWXM2C59iorpToez6bZpBDovq4BAx5RCVLCPcJFZm_vltlHectWxgMDDiZe-4rQOIOhTzYg2PugMnJe836gJx_z04QEKWWnD7Xrf6qOuo=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/youtube.png\" style=\"width:30px\"></a>
&nbsp;

<!--INSTAGRAM-->
<a href=\"https://www.instagram.com/ramdevpcb_vasai/\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci4.googleusercontent.com/proxy/UfyJpVcccZD3hgPZqRQbq28YwgzlR1IXn-__CtkVbpJW3yVArZ1lKbPuyuSN6ojoOwPFhaDXaBQQBEtV9ACm8DT4fMnBAjXTdBxzION0sDv2iagjp8MHPA=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png\" style=\"width:30px\"></a></p>
<br>

</div>
</div>
 
</body>
</html>";    
}
else if($sendmail == "orderreadyselfpickup"){
//order ready self pickup
$subject ="Your order is ready!";
$message="<html>
<body style=\"background-color:#fff; font-size:16px; text-decoration: none; font-family:'calibri'\">
    	<div style=\"max-width: 600px; min-width:200px; background-color: #fff; padding:20px; margin:auto\">
    	
    	



<div id=\"content\" style=\"font-size:16px; padding:25px; background-color:#fff; moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;padding-bottom: 0; border-color: #b09707; border-width: 4px 1px; border-style:solid;\">
  <div style=\"text-align:center\">
  <img src=\"http://ramdevpcb.com/assets/imgs/theme/RamdevLogo.jpg\" style=\"width:35%;\">
  </div>
 <p>Hello ".$username.",<br><br>
We're happy to tell you that your order has been completed<br>
You can collect your order from our manufacturing unit. <br><br>
We hope you enjoy your purchase and we thank you for choosing Ramdev PCB.<br>
Feel free to contact us if you have any questions or comments, we are always happy.<br><br>
Ramdev PCB,<br>
PCB Manufacturer
</p>



<br>
<br>
<div style=\"text-align:center\" >
    <a href=\"https://ramdevpcb.com\" target=\"_blank\">
<button style=\"background-color: #b09707; padding: 10px 25px 10px 25px; border: 2px solid #dbca19; color:white;\"><b>VISIT US</b></button></a>
</div>
<h3 style=\"font-family: unset;
    font-style: italic;
    text-align: center;
    color: rgb(111,111,111);
        margin-top: 50px;\"> Stay In Touch </h3>
<p style=\"text-align:center; margin-top:-10px; \">

    <!-- FACEBOOK-->
    <a href=\"https://www.facebook.com/ramdevpcb\" target=\"_blank\" style=\"text-decoration: none;\">
       <img src=\"https://www.citypng.com/public/uploads/preview/-11595326936asbkomoamd.png\" style=\"width:30px\">
</a>
&nbsp;

<!--YOUTUBE-->
<a href=\"https://www.youtube.com/channel/UCFP80Vky14QWlCZtOcG2HBg/videos\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci3.googleusercontent.com/proxy/mPcIHyJdZhWWXM2C59iorpToez6bZpBDovq4BAx5RCVLCPcJFZm_vltlHectWxgMDDiZe-4rQOIOhTzYg2PugMnJe836gJx_z04QEKWWnD7Xrf6qOuo=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/youtube.png\" style=\"width:30px\"></a>
&nbsp;

<!--INSTAGRAM-->
<a href=\"https://www.instagram.com/ramdevpcb_vasai/\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci4.googleusercontent.com/proxy/UfyJpVcccZD3hgPZqRQbq28YwgzlR1IXn-__CtkVbpJW3yVArZ1lKbPuyuSN6ojoOwPFhaDXaBQQBEtV9ACm8DT4fMnBAjXTdBxzION0sDv2iagjp8MHPA=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png\" style=\"width:30px\"></a></p>
<br>

</div>
</div>
 
</body>
</html>";    
}
else if($sendmail == "orderdelivered"){
//order Completed
$subject ="Order delivered Successfully";
$message="<html>
<body style=\"background-color:#fff; font-size:16px; text-decoration: none; font-family:'calibri'\">
    	<div style=\"max-width: 600px; min-width:200px; background-color: #fff; padding:20px; margin:auto\">
    	
    	



<div id=\"content\" style=\"font-size:16px; padding:25px; background-color:#fff; moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;padding-bottom: 0; border-color: #b09707; border-width: 4px 1px; border-style:solid;\">
  <div style=\"text-align:center\">
  <img src=\"http://ramdevpcb.com/assets/imgs/theme/RamdevLogo.jpg\" style=\"width:35%;\">
  </div>
 <p>Hello ".$fullnames.",<br><br>
The order has been delivered. Thank you for choosing Ramdev PCB.<br>

We are committed to delivering the best products possible and want to ensure you are 100% satisfied with our product.<br>
If you have any feedback, please let us know how we can improve your experience with us.<br>

If you wish to make a new order, please visit our website at <a href=\"https://www.ramdevpcb.com\">https://www.ramdevpcb.com</a><br>

Thank you for placing your order with us and we hope to see you again soon!<br><br>
Ramdev PCB,<br>
PCB Manufacturer
</p>



<br>
<br>
<div style=\"text-align:center\" >
    <a href=\"https://ramdevpcb.com\" target=\"_blank\">
<button style=\"background-color: #b09707; padding: 10px 25px 10px 25px; border: 2px solid #dbca19; color:white;\"><b>VISIT US</b></button></a>
</div>
<h3 style=\"font-family: unset;
    font-style: italic;
    text-align: center;
    color: rgb(111,111,111);
        margin-top: 50px;\"> Stay In Touch </h3>
<p style=\"text-align:center; margin-top:-10px; \">

    <!-- FACEBOOK-->
    <a href=\"https://www.facebook.com/ramdevpcb\" target=\"_blank\" style=\"text-decoration: none;\">
       <img src=\"https://www.citypng.com/public/uploads/preview/-11595326936asbkomoamd.png\" style=\"width:30px\">
</a>
&nbsp;

<!--YOUTUBE-->
<a href=\"https://www.youtube.com/channel/UCFP80Vky14QWlCZtOcG2HBg/videos\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci3.googleusercontent.com/proxy/mPcIHyJdZhWWXM2C59iorpToez6bZpBDovq4BAx5RCVLCPcJFZm_vltlHectWxgMDDiZe-4rQOIOhTzYg2PugMnJe836gJx_z04QEKWWnD7Xrf6qOuo=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/youtube.png\" style=\"width:30px\"></a>
&nbsp;

<!--INSTAGRAM-->
<a href=\"https://www.instagram.com/ramdevpcb_vasai/\" target=\"_blank\" style=\"text-decoration: none;\">
    <img src=\" https://ci4.googleusercontent.com/proxy/UfyJpVcccZD3hgPZqRQbq28YwgzlR1IXn-__CtkVbpJW3yVArZ1lKbPuyuSN6ojoOwPFhaDXaBQQBEtV9ACm8DT4fMnBAjXTdBxzION0sDv2iagjp8MHPA=s0-d-e1-ft#https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png\" style=\"width:30px\"></a></p>
<br>

</div>
</div>
 
</body>
</html>";

  echo '<script>var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
        var response = xhttp.responseText;
        console.log("ok"+response);
    }
};
xhttp.open("GET", "https://49.50.67.32/smsapi/httpapi.jsp?username=ramdev&password=Ramdev@2022&from=RDPCBS&to=9699530145&text=Hello user, your order id 123 is delivered successfully. We sincerely appreciate your business and hope you come back soon!&coding=0&pe_id=1501713720000051526&template_id=1507166262252498384&flash=2", true);

xhttp.send();
    
</script>';
}



 mail($to, $subject, $message, $headers);



?>