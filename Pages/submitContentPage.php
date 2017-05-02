<?php
if(!isset($_COOKIE["userID"])){
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<title>Submit Content</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		body{
			background-color: gainsboro;
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

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-black">Submit Content</h2>
    <hr style="width:200px" class="w3-text-black">
    <p>
      <!--
      Code to interact with database...

      <form method="post" id="submitContent" name="submitContent" action="">
      
      -->
      <!-- Create fields for a submission -->
      <form method="post" id="submitPost" name="createAccount" action="../scriptsPHP/submitPostForm.php">
        <p2>New Post:</p2><br>
        <input spellcheck="true" style="width:400px" type="text" placeholder="Title" name="title" id="title"><br>
        
        <p2>Content:</p2><br>
        <textarea spellcheck="true" name="content" id="content" placeholder="Post Content" rows="10" cols="75"></textarea>
        <br>
        <input type="submit" onclick="return validateForm()"></input>
      </form>
    </p>
   
  </div>

  <div style="position: fixed; top: 93%; left: 92%;">
      <p>FaceIt © 2017</p>
  </div>

</div>

<script type="text/javascript">


  function validateForm()
  {
      var a=$("#title").val();
      var b=$("#content").val();
      if(a==null || a=="",b==null || b=="")
      {
        alert("Please fill all required fields");
        return false;
      }
  }
  
  // $(document).ready(function(){



  // });


</script>

</body>
</html>
