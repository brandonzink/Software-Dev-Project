<?php


function getDB(){//replace all other uses so that when site goes live I only have to change this function from root,root
  return new mysqli("localhost", "root", "", "faceit");
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

function createAccount($mysqli, $username, $password, $email){
	// // Check if username is a duplicate
	// $usernameCheck=mysql_query("SELECT * FROM users (username, password, email) WHERE username=$username");
	// if(mysqul_num_row($usernameCheck)>=1){
	// 	echo"That username is already being used.";
	// }

	// // Check if email is a duplicate
	// $emailCheck=mysql_query("SELECT * FROM users (username, password, email) WHERE email=$email");
	// else if(mysqul_num_row($emailCheck)>=1){
	// 	echo "That email is already being used for a different account.";
	// }

	// else{
	// 	$sql = "INSERT INTO users (username, password, email)
	// 	VALUES ($username, $password, $email)";
	// }

	// Check if username is a duplicate
	$usernameCheck = 'SELECT * FROM Users WHERE username = ?';

	$statement = $mysqli->prepare($usernameCheck);
	$statement->bind_param("s", $username);
	$statement->execute();
	$statement->fetch();

	$row_count = $statement->num_rows;
	$statement->close();


	if($row_count > 0){
		echo"That username is already being used.";
	}else{
		// Check if email is a duplicate
		$emailCheck= "SELECT * FROM users WHERE email = ?";
		$statement = $mysqli->prepare($emailCheck);
		$statement->bind_param("s", $email);
		$statement->execute();
		$statement->fetch();

		$row_count = $statement->num_rows;
		$statement->close();

		if($row_count > 0){
			echo "That email is already being used for a different account.";
		}else{
			$sql = "INSERT INTO users (username, password, email) VALUES ($username, $password, $email)";
			echo "We bouta create this account!!!!";
		}
	}

}













?>