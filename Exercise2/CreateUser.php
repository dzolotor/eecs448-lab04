<?php


$user = $_POST["user"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "d880z956", "uxo3ohz9", "d880z956");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('$user');";

/* user_id has text and not written by existing user */
if( strlen($user) > 0 && $mysqli->query($query) ){
    echo "User $user added <br>";
}else{
    echo "user_id is empty or user_id is already in use<br>";
}

$mysqli->close();

?>
