<?php

    $mysqli = new mysqli("mysql.eecs.ku.edu", "cmaxcy", "Oranges", "cmaxcy");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT * FROM Posts;";

    if ($result = $mysqli->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            if ($_POST[$row["post_id"]] == "True") {
                if ($mysqli->query("DELETE FROM Posts WHERE post_id=" . $row["post_id"] .";")) {
                    echo "Post id: " . $row["post_id"] . " Deleted </br>";
                } else {
                    echo "FAILURE IN DELETION";
                }
            }
        }

        /* free result set */
        $result->free();
    } else {
        echo "ERROR: query failed";
    }

    /* close connection */
    $mysqli->close();

?>
