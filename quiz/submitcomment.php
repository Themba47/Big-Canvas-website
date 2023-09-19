<?php

require_once "config.php";

	$comment = $_REQUEST['comment'];
    $name = $_REQUEST['name'];

    $query = mysqli_query($con, "INSERT INTO comments (comment, name) VALUES ('$comment', '$name')");
    if($query)
    {
      echo 200;

    }
    else 
    {
      
        echo mysqli_error($con);
    }


?>