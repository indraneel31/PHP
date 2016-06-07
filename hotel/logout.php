<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php
session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  header("Location: adminlogin.php");
?>
