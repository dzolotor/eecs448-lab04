<?php

$user = $_POST["user"];
$post = $_POST["post"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "d880z956", "uxo3ohz9", "d880z956");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* post not empty */
if(strlen($post) > 0){
    $query = "INSERT INTO Posts (author_id, content) VALUES ('$user', '$post');";
    $result = $mysqli->query("SELECT user_id FROM Users WHERE user_id='$user'");

    /* written by existing user */
    if($result->num_rows != 0)
    {
        if( strlen($user) > 0 && $mysqli->query($query) ){
            echo "$user successfully posted '$post' <br>";
        }else{
        }
       
    }else{
        echo "user_id '$user' does not exist<br>";
    }

}else{
    echo "post is empty<br>";
}

$mysqli->close();

?>
