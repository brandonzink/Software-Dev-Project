<?php
  /*! 
   * This is the user profile page
   * It uses classes imported fro w3schools.com for stylization and page layout
   * Local classes are defined within the style tags
   *
   */

  include_once("../scriptsPHP/databasehelper.php");

  if(!isset($_COOKIE["userID"])){
    header('Location: index.php');
  }

  $userID_loggedIn = (isset($_COOKIE["userID"])) ? $_COOKIE["userID"] : -1;
  $userID_profOwner = (isset($_GET["id"])) ? $_GET["id"] : $_COOKIE["userID"];


  $mysqli = getDB();
  $profile = getUserProfile($mysqli, $userID_profOwner);
  $mysqli->close();

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


<!-- Icon Bar (Sidebar - hidden on small screens) 
  generates a sidebar with icons that direct the user to the indicated pages
-->
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
<!--   <a href="settingsPage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-bars w3-xxlarge"></i>
    <p>SETTINGS</p>
  </a> -->
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

  <div style="position: fixed; top: 93%; left: 92%;">
      <p>FaceIt © 2017</p>
  </div>

  <div class="w3-row w3-border">
  <div class="w3-twothird w3-container w3-gainsboro">
  <!-- left two thirds container -->
  <div style="position: fixed; top: 93%; left: 92%;">
      <p>FaceIt © 2017</p>
  </div>


  <!-- This is where the user profile goes --> <br>
  <!-- user name, edit profile button -->
    <name><?php echo $profile->firstName." ".$profile->lastName; ?></name>
   <!--  <form action="editProfilePage.php">
        <input type="submit" class="button" value="Edit"></input>
        <!-- Sends to create account page -->
    <!-- </form> -->
    <br>

    <!-- profile picture -->
    <img src="../profilepics/<?php echo (!empty($profile->profilePicURL)) ? $profile->profilePicURL : 'noProfPic.png'; ?>" id="profilepic" class="profile_pic" /><br>

    <!-- Email, work, about -->
    <h3>Email</h3>
    <p><?php echo $profile->email; ?></p><br>

    <h3>About</h3>

    <p><?php echo $profile->description; ?></p>

  </div>
  <div class="w3-third w3-container">
  <!-- Right third container -->

      <!-- Update info form -->
  <!-- Update info form -->
  <?php

    if($userID_loggedIn == $userID_profOwner){
      echo '<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
              <h2 class="w3-text-black">Update Info</h2>
              <hr style="width:200px" class="w3-text-black">
              <p>
                <form method="post" action="../scriptsPHP/updateProfileForm.php" enctype="multipart/form-data">
                First Name:<br>
                <input type="text" name="firstname" value="'.$profile->firstName.'"/><br>
                Last Name:<br>
                <input type="text" name="lastname" value="'.$profile->lastName.'"/><br>
                Email :<br>
                <input type="text" name="email" value="'.$profile->email.'"/><br>
                Description:<br>
                <textarea type="text" name="description">'.$profile->description.'</textarea><br><br>
                Upload new Profile Picture:<br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                <input type="submit" value="Update">
                </form>
              </p>
              
            </div>';
    }

  ?>
  

  </div>
  </div>

</body>
</html>