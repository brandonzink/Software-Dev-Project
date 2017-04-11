<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>

	<style type="text/css">
	/*Setting up styling for page*/
		body{
			background-color: gainsboro;
		}
		h3{
			font-family: Arial;
		}

		p{
			font-family: Arial;
			font-size: 14px;
		}

		p1{
			font-family: Arial;
			color: grey;
			font-size: 11px;
		}

		p2{
			font-family: Arial;
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

		input[type="email"] {
		  padding: 10px;
		  border: solid 3px grey;
		  transition: border 0.3s;
		  border-radius: 4px;
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
	<CENTER>
	<br><br><br><br><br><br>
	<h3>Let's make a new account for you here at FaceIt.</h2>
	<p>Please come up with a username, password, and enter your email address.<p>

	<!-- Headers and instructions -->

	<form method="post" id="createAccount" name="createAccount" action="scriptsPHP/createAccountForm.php">

	<!-- Sends information to createAccount.php -->

  		<p2>Username:</p2><br>
  		<!-- Max 20 characters -->
  		<p1>Please make it 20 characters or less.</p1><br>
  		<input type="text" placeholder="username" name="username"><br> 
  		<!-- Username field -->
  		<br><p2>Password:</p2><br>
  		<input type="password" placeholder="password" name="password">
  		<!-- Password field -->
  		<br><br><p2>Email:</p2><br>
  		<input type="email" placeholder="me@example.net" name="email"><br><br><br>
  		<!-- Email field -->
  		<br><input type="Submit" class="button" value="Create Account" onclick="return validateForm()" /></input> 
  		<!-- Runs validateForm() to check if fields are empty -->
	</form>
	</CENTER>
</body>
</html>

<script type="text/javascript">
// Checks to see if fields are left empty, shows alert message if any are empty
function validateForm()
{
	var a=document.forms["createAccount"]["username"].value;
    var b=document.forms["createAccount"]["password"].value;
    var c=document.forms["createAccount"]["email"].value;
    if(a==null || a=="",b==null || b=="", c==null || c=="")
    {
    	alert("Please fill all required fields");
    	return false;
    }
}
</script>

