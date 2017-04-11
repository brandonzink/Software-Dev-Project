<?php
include_once("databasehelper.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$profession = $_POST["profession"];
$description = $_POST["description"];

$mysqli = getDB();

editProfilePage($mysqli, $firstname, $lastname, $profession, $description);

?>