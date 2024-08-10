<?php
 session_start();

  
  session_destroy();   // function that Destroys Session 
 echo "<script type='text/javascript'>window.location.href = 'index.php';alert('User Logged Out Successfully');</script>";
  //header("Location: Login.php");
?>