<?php


function getDB(){//replace all other uses so that when site goes live I only have to change this function from root,root
  return new mysqli("localhost", "root", "root", "faceit");
}

function loginCheck($mysqli, $username, $password){
	$query = "SELECT ID,Password FROM Users WHERE username = ?";

	$statement = $mysqli->prepare($query);
	$statement->bind_param("s", $username);
	$statement->execute();

	$result = $statement->get_result();
	$row = $result->fetch_array(MYSQLI_NUM);

	$row_count = mysqli_num_rows($result);


	if($row_count == 0){
		return false;
	}

	$statement->close();

	$passwordHash = $row[1];
	$ID = $row[0];

	if(password_verify($password, $passwordHash)){

		return true;

    }else{
    	return false;
    }
}













?>