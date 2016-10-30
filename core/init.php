<?php
  error_reporting(0);
  session_start();
  $con = mysqli_connect('localhost','root','','shoppingcart');

  if (!$con) {
    die('There seems to be no connetion to the database!!!! Please wait while we are tryin to fix the connection.');
  }



 ?>
