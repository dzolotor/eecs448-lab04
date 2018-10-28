<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "d880z956", "uxo3ohz9", "d880z956");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Users;";
$result = $mysqli->query($query);

if($result->num_rows > 0)
{
    echo "+---------+ <br>";
    echo "| user_id | <br>";
    echo "+---------+ <br>";
    while($row = $result->fetch_assoc())
    {
        echo "| " . $row["user_id"] . " |<br>";
    }
} else {
    echo "NO USERS!";
}

$mysqli->close();

?>
