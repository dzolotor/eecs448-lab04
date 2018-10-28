<?php

if(isset($_POST['getUser'])){
    $user = $_POST["getUser"];
}

$mysqli = new mysqli("mysql.eecs.ku.edu", "d880z956", "uxo3ohz9", "d880z956");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT content FROM Posts WHERE author_id='$user';";
$result = $mysqli->query($query);

if($result->num_rows > 0)
{
    echo "+---------+ <br>";
    echo "| content | <br>";
    echo "+---------+ <br>";
    while($row = $result->fetch_assoc())
    {
        echo "| " . $row["content"] . " |<br>";
    }
} else {
    echo "NO POSTS!";
}

$mysqli->close();

?>

