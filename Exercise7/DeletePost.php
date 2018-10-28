<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "d880z956", "uxo3ohz9", "d880z956");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


if(!empty($_POST['chk'])){

    foreach($_POST['chk'] as $selected){
        
        $selected = substr($selected, 2);
        $pos = strpos($selected, " ");
        $user = substr($selected, 0, $pos);
        echo "user: " . $user . "<br>";
        
        $selected = substr($selected, $pos+2);
        $pos = strpos($selected, "|");
        $post = substr($selected, 1, $pos-2);
        echo "post: " . $post . "<br><br>";

        $query = "DELETE FROM Posts WHERE author_id='$user' AND content='$post';";
        
        if( $mysqli->query($query) ){
            printf("Affected rows (DELETE): %d\n", $mysqli->affected_rows); 
        }else{
            echo "failed";
        }

    }
}
$mysqli->close();

?>
