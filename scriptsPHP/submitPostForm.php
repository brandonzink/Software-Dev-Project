<?php

include_once("databasehelper.php");

$title = $_POST["title"];
$text = $_POST["content"];
$posterID = $_COOKIE["userID"];

$mysqli = getDB();

submitPost($mysqli, $title, $text, $posterID);

$mysqli->close();

?>