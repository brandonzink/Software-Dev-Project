<!DOCTYPE html>
<html>
<head>
	<title>FaceIt Login</title>
<style>
body{
	background-color: White;
}
</style>
</head>
<body>
<header>
	
  <CENTER>
  <img src="http://i.imgur.com/NlLgS1e.png" id="sslogo"/>
  <!-- Site logo -->
  <form method="post" id="loginForm" name="loginForm" action="scriptsPHP/loginForm.php">
  <!-- Sends info to loginForm.php -->
  		Username:<br>
  		<!-- Max 20 characters -->
  		<input type="text" name="username"><br> 
  		<!-- Username entry field -->
  		Password:<br>
  		<input type="password" name="password">
  		<!-- Password entry field -->
  		<br>
  		<br><input type="Submit" class="login" value="Login" onclick="return validateForm()" /></input> 
  		<!-- Checks to see if fields are left empty -->
	</form>
	<br>
	<a href="createAccount.php">
		<button>Create Acount</button>
	</a>
	<!-- Sends to create account page -->

    </CENTER>

</header> 
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
    	alert("Please fill all reuired fields");
    	return false;
    }
}
</script>