<?php

include_once("databasehelper.php");
//include_once("profilePage.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];

$mysqli = getDB();

$result = loginCheck($mysqli, $username, $password);

if($result != false){
	setcookie("userID", $result, false, '/');
	header("Location: ../Pages/profilePage.php");

}else{
	echo "invalid username or password <br>";
}

?>