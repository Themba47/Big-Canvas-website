<?php 

    $targetPath = "videos/" . basename($_FILES["dali"]["name"]);
    move_uploaded_file($_FILES["dali"]["tmp_name"], $targetPath);

?>