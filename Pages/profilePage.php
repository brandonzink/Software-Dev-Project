<?php
if(!isset($_COOKIE["userID"])){
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<title>Profile Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
      background-color: gainsboro;
    }

    name{
    	color: #1a1a1a;
		font-size: 30px;
		font-weight: bold;
    }

    .profile_pic{
    	height: 300px;
    	width: auto;
    }

    .button{
		background-color: gainsboro; 
	    border: none;
	    color: black;
	    padding: 2px 4px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    vertical-align: middle;
	    font-size: 12px;
	    border: 2px solid grey;
	    border-radius: 4px;
	}

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>


<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <a href="homePage.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="profilePage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>PROFILE</p>
  </a>
  <a href="submitContentPage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-globe w3-xxlarge"></i>
    <p>SUBMIT CONTENT</p>
  </a>
  <a href="../scriptsPHP/logoutForm.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-sign-in w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
</nav>


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> FaceIt</h1>
    <p>Facilitate conversation, share knowledge, and connect like minded people.</p>
  </header>

<!-- This is where the user profile goes --> <br>
<!-- user name, edit profile button -->
<name>Cam Connor</name>
<form action="editProfilePage.php">
		<input type="submit" class="button" value="Edit"></input>
		<!-- Sends to create account page -->
</form><br>

<!-- profile picture -->
<img src="Images/cammyfatty.jpg" id="profilepic" class="profile_pic" /><br>

<!-- Email, work, about -->
<h3>Email</h3>
<p>Isuckcock@hotmail.com</p><br>

<h3>Work</h3>
<p>School of the mentally fucking retarted</p><br>

<h3>About</h3>
<p>I like to jump on dudes cocks for a living, it really gets me going and I really like to excitement from getting a giant cock in that ass.</p>

</body>
</html>
