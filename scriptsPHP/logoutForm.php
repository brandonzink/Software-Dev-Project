<?php
	/* This script deletes the cookie containing the user's login info
	 * so that they are not redirected to the login page after logging out.
	 * This prevents them from accessing site content if they are not logged in.
	 */
  setcookie("userID", null,false,"/");
  header("Location: ../Pages/index.php");
?>