<?php
include_once("databasehelper.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$description = $_POST["description"];
$email = $_POST["email"];
$userID = $_COOKIE["userID"];


$mysqli = getDB();

editProfilePage($mysqli, $firstname, $lastname, $email, $description, $userID);

$mysqli->close();

$target_dir = "../profilepics/";
$fileName =  time().basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $fileName;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(!empty($_FILES["fileToUpload"]["tmp_name"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], str_replace(' ', '', $target_file))) {
         	$mysqli = getDB();

			updateProfileImageURL($mysqli, $mysqli->real_escape_string(str_replace(' ', '', $fileName)), $userID);

			$mysqli->close();

        	header("Location: ../Pages/profilePage.php?id=".$userID);
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
	header("Location: ../Pages/profilePage.php?id=".$userID);

}

?>