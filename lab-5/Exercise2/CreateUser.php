<?php
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "cmaxcy", "Oranges", "cmaxcy");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$user_id = $_POST["user_id"];
	$query = "INSERT INTO Users (user_id) VALUES ('" . $user_id . "');";
	
	if ($user_id != "" && $result = $mysqli->query($query)) {
		echo "Success!";
	} else {
		echo "Failure!";
	}

	/* close connection */
	$mysqli->close();
?>
