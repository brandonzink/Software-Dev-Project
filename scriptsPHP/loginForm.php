<?php

include_once("databasehelper.php");
//include_once("profilePage.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];

$mysqli = getDB();

$result = loginCheck($mysqli, $username, $password);

if($result != false){
	setcookie("userID", $result, false, '/');
	echo "login successful";
	//$link_address2 = 'profilePage.php';
	//echo "<a href='$link_address1'>Profile Page</a>";
	echo " <a href='profilePage.php'>Profile Page</a>";

}else{
	echo "invalid username or password <br>";
}

?>