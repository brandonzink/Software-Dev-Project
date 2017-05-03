<?php

include_once("databasehelper.php");

$username = (empty($_POST["username"])) ? "" : $_POST["username"];
$password = (empty($_POST["password"])) ? "" : $_POST["password"];
$email = (empty($_POST["email"])) ? "" : $_POST["email"];

$mysqli = getDB();

createAccount($mysqli, $mysqli->real_escape_string($username), $password,  $mysqli->real_escape_string($email));

$mysqli->close()


?>