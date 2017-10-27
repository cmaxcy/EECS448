<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "cmaxcy", "Oranges", "cmaxcy");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$user_id = $_POST["select"];

    $query = "SELECT Users.user_id, Posts.content FROM Users INNER JOIN Posts ON Users.user_id=Posts.author_id WHERE user_id='" . $user_id ."';";

    if ($result = $mysqli->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            echo $row["content"];
            echo "</br>";
        }

        /* free result set */
        $result->free();
    } else {
        echo "ERROR: query failed";
    }

	/* close connection */
	$mysqli->close();
?>
