<!DOCTYPE html>

<title>Profile Page</title>
<head>
<h1>Profile Page</h1>
</head>

<body></body>

<?php
include_once("databasehelper.php");
//include_once("loginForm.php");


?>

<form action="profilePage2">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" value=""><br><br>
    Last name:<br>
    <input type="text" name="lastname" value=""><br><br>
    Username:<br>
    <input type="text" name="username" value=""><br><br>
    Profession:<br>
    <input type="text" name="profession" value=""><br><br>
    Description:<br>
    <input type="text" name="Description" value=""><br><br> 

    <input type="submit" value="Submit">
  </fieldset>
</form>

</html>