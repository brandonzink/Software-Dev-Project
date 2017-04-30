<?php

include_once("databasehelper.php");
//include_once("profilePage.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];

$mysqli = getDB();

$result = loginCheck($mysqli, $username, $password);

if($result != false){
	setcookie("userID", $result, false, '/');

	//echo "login successful";
	//echo " <a href='../Pages/profilePage.php'>Profile Page</a>";
	
	header("Location: ../Pages/profilePage.php");
    exit;

}else{
	echo "invalid username or password <br>";
}

?>