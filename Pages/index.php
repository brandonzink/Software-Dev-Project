<?php
// Check if the user is logged in, if so allow them to access their profile page
if(isset($_COOKIE["userID"])){
  header('Location: profilePage.php');
}

  /*! 
   * This is index page
   * It uses classes imported fro w3schools.com for stylization and page layout
   * Local classes are defined within the style tags
   *
   */

?>

<!DOCTYPE html>
<html>
<head>
	<title>FaceIt Login</title>
<style>
body{
	background-image: url(Images/background.gif);
	background-repeat: no-repeat;
	background-size: 100%;
}
input[type="text"] {
  padding: 10px;
  border: solid 3px grey;
  transition: border 0.3s;
  border-radius: 4px;
}

input[type="password"] {
  padding: 10px;
  border: solid 3px grey;
  transition: border 0.3s;
  border-radius: 4px;
}

.mainbox{
	width: 1000px;
	height: auto;
	background: linear-gradient(to bottom right, gainsboro, gray);

	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	z-index: -1;

	margin: auto;

	border-radius: 100px;
}

.button{
	background-color: gainsboro; 
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border: 2px solid grey;
    border-radius: 4px;
}



</style>
</head>
<body>
<header>

  <CENTER>
  <!-- Part of fade in image on page load -->
  <!-- <div class=elementToFadeInAndOut></div> -->

  
  <img src="Images/faceit_mainlogo_noback.png" id="sslogo"/>
  <!-- Site logo -->
  <form method="post" id="loginForm" name="loginForm" action="../scriptsPHP/loginForm.php">
  <!-- Sends info to loginForm.php -->
  		<br>
  		<!-- Max 20 characters -->
  		<input type="text" name="username" placeholder="Username"><br> 
  		<!-- Username entry field -->
  		<br>
  		<input type="password" name="password" placeholder="Password">
  		<!-- Password entry field -->
  		<br>
  		<br><input type="Submit" class="button" value="Login" onclick="return validateForm()" /></input> 
  		<!-- Checks to see if fields are left empty -->
	</form>
	<br>
	<form action="createAccount.php">
		<input type="Submit" class="button" value="Create Account"></input>
		<!-- Sends to create account page -->
	</form>

  <div>
    <p>Must be 13 or older</p>
  </div>

	<div class=mainbox></div>
 
    </CENTER>

</header> 
  
   <div style="position: fixed; top: 95%; left: 67%;">
      <p>FaceIt © 2017</p>
  </div>

</body>
</html>

<script type="text/javascript">
// Checks to see if fields are blanks, alerts if they are
function validateForm()
{
	var a=document.forms["loginForm"]["username"].value;
    var b=document.forms["loginForm"]["password"].value;
    if(a==null || a=="",b==null || b=="")
    {
    	alert("Please fill all required fields");
    	return false;
    }
}
</script>