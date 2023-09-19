<?php 

    $targetPath = "images/" . basename($_FILES["dali"]["name"]);
    move_uploaded_file($_FILES["dali"]["tmp_name"], $targetPath);

?>