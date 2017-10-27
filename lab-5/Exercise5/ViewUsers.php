<?php

	$mysqli = new mysqli("mysql.eecs.ku.edu", "cmaxcy", "Oranges", "cmaxcy");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

    $query = "SELECT * FROM Users;";

    if ($result = $mysqli->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            echo $row["user_id"] . "</br>";
        }

        /* free result set */
        $result->free();
    }

	/* close connection */
	$mysqli->close();
?>
