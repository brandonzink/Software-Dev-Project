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
  <a href="homePage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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
  <a href="settingsPage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-bars w3-xxlarge"></i>
    <p>SETTINGS</p>
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

<<<<<<< HEAD
<<<<<<< HEAD
  <!-- Update info form -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-black">Update Info</h2>
    <hr style="width:200px" class="w3-text-black">
    <p>
      <form method="post" action="../scriptsPHP/updateProfileForm.php">
      First Name:<br>
      <input type="text" name="firstname"><br>
      Last Name:<br>
      <input type="text" name="lastname"><br>
      Profession :<br>
      <input type="text" name="profession"><br>
      Description:<br>
      <input type="text" name="description"><br>
      <input type="submit" value="Update">
      </form>
    </p>
    
</div>
=======
=======
  <div style="position: fixed; top: 93%; left: 92%;">
      <p>FaceIt © 2017</p>
  </div>

>>>>>>> master
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
<p>johndoe@gmail.com</p><br>

<h3>Work</h3>
<p>CU Boulder, Colorado</p><br>

<h3>About</h3>
<<<<<<< HEAD
<p>I like to jump on dudes cocks for a living, it really gets me going and I really like to excitement from getting a giant cock in that ass.</p>
>>>>>>> master
=======
<p>Singing in the shower.</p>
>>>>>>> master

</body>
</html>