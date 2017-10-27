<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "cmaxcy", "Oranges", "cmaxcy");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$user_id = $_POST["user_id"];
    $post = $_POST["post"];

    $query = "SELECT * FROM Users WHERE user_id='" . $user_id . "';";

	if ($post != "" && $result = $mysqli->query($query)) {
        if ($row = $result->fetch_assoc()) {
			$query = "INSERT INTO Posts (author_id, content) VALUES ('" . $user_id . "', '" . $post . "');";
			if ($result = $mysqli->query($query)) {
				echo "Post added!";
			} else {
				echo "ERROR: Post could not be added!";
			}
        } else {
            echo "ERROR: User is NOT in database!";
        }
	} else {
		echo "ERROR: Post cannot be empty!";
	}

	/* close connection */
	$mysqli->close();
?>
