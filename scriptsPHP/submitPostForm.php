<?php

include_once("databasehelper.php");

$title = $_POST["title"];
$text = $_POST["content"];
$posterID = $_COOKIE["userID"];

$mysqli = getDB();

submitPost($mysqli, $mysqli->real_escape_string($title), $mysqli->real_escape_string($text), $posterID);

$mysqli->close();

?>