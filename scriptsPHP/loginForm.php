<?php

include_once("databasehelper.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];

$mysqli = getDB();

$result = loginCheck($mysqli, $username, $password);

if($result){
	echo "login successful";
}else{
	echo "invalid username or password";
}

?>