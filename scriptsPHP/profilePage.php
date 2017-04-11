<!DOCTYPE html>

<title>Profile Page</title>
<head>
<h1>Profile Page</h1>
</head>

<<<<<<< HEAD
<body></body>

<?php
include_once("databasehelper.php");
include_once("loginForm.php");

echo "Username<br>";
echo "johndoe<br>";
<<<<<<< HEAD
dickbag
=======

>>>>>>> master
echo "First Name<br>";
echo "John<br>";

echo "Last Name<br>";
echo "Doe<br>";

echo "Profession<br>";
echo "Accountant<br>";

echo "Description<br>";
//ADD AN INPUT BOX




?>
=======


<?php
include_once("databasehelper.php");
//include_once("finalizedProfilePage.php");
//include_once("loginForm.php");


//value="Submit" onclick="return editProfilePage($mysqli, $firstname, $lastname, $username, $description)" /></input
?>

<form action="finalizedProfilePage.php" method="get">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname"><br><br>
    Last name:<br>
    <input type="text" name="lastname"><br><br>
    Username:<br>
    <input type="text" name="username"><br><br>
    Profession:<br>
    <input type="text" name="profession"><br><br>
    Description:<br>
    <input type="text" name="description"><br><br> 

   <input type="submit">
  </fieldset>
</form>


>>>>>>> master

</html>