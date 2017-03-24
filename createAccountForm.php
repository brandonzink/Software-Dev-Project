<?php

include_once("databasehelper.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];
$email = (empty($_POST["email"])) ? "" : $_POST["email"];

$mysqli = getDB();

$result = createAccount($mysqli, $username, $password);

if($result){
	echo "Account created successfully";
}

?>