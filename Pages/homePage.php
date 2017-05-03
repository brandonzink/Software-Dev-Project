<?php
include_once("../scriptsPHP/databasehelper.php");
  if(!isset($_COOKIE["userID"])){
    header('Location: index.php');
  }

  $mysqli = getDB();
  $posts = retrievePosts($mysqli);
  $mysqli->close();

?>
<!DOCTYPE html>
<html>
<title>FaceIt Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></link>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
<link rel="stylesheet" type="text/css" href="css/homepage.css"></link>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../date.js"></script>



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

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-black">Recent Posts</h2>
    <hr style="width:200px" class="w3-text-black">
  </div>

  <div id="postContainer">
    <ul id="postBoardList">
      
    </ul>
  </div>

  <div style="position: fixed; top: 93%; left: 92%;">
      <p>FaceIt © 2017</p>
  </div>
    
</div>

<script type="text/javascript">
  
  $(document).ready(function(){
    var posts = JSON.parse(<?php echo "'".json_encode($posts)."'"; ?>);
    initializePostsBoard(posts)
  });


  function initializePostsBoard(posts){

      if(posts.length == 0){
        $('#postBoardList').append("<center><h5>No messages have been sent.</h5></center>");
      }

        for(var i = 0; i < posts.length; i++){
          var p = posts[i];
          console.log(p);
          console.log
          var picURL = (p['posterProfile']['profilePicURL'] != '') ? p['posterProfile']['profilePicURL'] : 'noProfPic.png';

          var img = "<a href='../Pages/profilePage.php?id=" + p['posterProfile']['posterID'] + "'><img class='msgImage' src='../profilepics/" + picURL + "'/></a>";
          var commentImg = "<a href='../Pages/profilePage.php?id=" + p['posterProfile']['posterID'] + "'><img class='commentMsgImage' src='../profilepics/" + picURL + "'/></a>";


          var name = p['posterProfile']['firstName'] + ' ' +p['posterProfile']['lastName'];

          var stamp = Date.parse(p['timestamp']).getTime()/1000; // dont need to convert because both times being compared are in UTC
          console.log(stamp + " - " +  <?php echo time(); ?>)

          var name = "<a href='../Pages/profilePage.php?id=" +  p['posterProfile']['posterID'] + "' class='nameLink'>" + name + "</a>"
          var title = "<p class='title'>" + p['title'] + '</p>';
          var text = "<p class='text'>" + p['text'] + '</p>';
          var message = "<div class='message noMargin' >" + title + text + "</div>";
          var msgTimestamp = "<p class='msgTimestamp noMargin'>" + timeSincePost(stamp, <?php echo time(); ?>) + "</p>";
          //var postActionDetails =  "<p class='msgTimestamp noMargin'> 5 Likes • "+ m['numComments'] +" Comments</p>";
          var postActionDetails =  "<p class='msgTimestamp noMargin'>"+ p['numComments'] +" Comments</p>";
          //var postActions = '<div class="postActions"><a class="bLike waves-effect waves-blue btn-flat"><i class="mdi-social-whatshot"></i></a> <a class="bComment waves-effect waves-blue btn-flat"><i class="mdi-communication-messenger"></i></a></div>';
          var postActions = '<div class="postActions"><a class="bComment waves-effect waves-blue btn-flat"><i class="mdi-communication-messenger"></i></a></div>';
          
          var spinner = '<center><div class="spinner"><div class="preloader-wrapper small active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></center>';

          var writeComment = '<div class="writeComment">'+spinner+'<ul class="commentList"></ul>'+commentImg+'<input class="commentInput" placeholder="Write a comment..." type="text" /></div>';

          $('#postBoardList').append("<li class='msgListItem card'><div class='paddingDiv'>" + img + name + msgTimestamp + message + "</div> </li>");

          // $('#postBoardList').append("<li class='msgListItem card'><div class='paddingDiv'>" + img + name + msgTimestamp + message + postActionDetails + postActions + "</div>" + writeComment + "</li>");
        }

  }

  function timeSincePost(timeOfPost,now){
      var delta = Math.abs(timeOfPost - now);


      var minutes = Math.floor(delta / 60);

      if(minutes < 1){
        return 'Just now.'
      }

      if(minutes < 60){
        var suffix = (minutes == 1) ? '' : 's';
        return minutes + ' min' + suffix + '';
      }

      var hours = Math.floor(delta / 3600);

      if(hours < 24){
        var suffix = (hours == 1) ? '' : 's';
        return hours + ' hour' + suffix + ''
      }

      var days = Math.floor(delta / 86400);
          var suffix = (days == 1) ? '' : 's';
      return days + ' day' + suffix + '';
    }


</script>

</body>
</html>
