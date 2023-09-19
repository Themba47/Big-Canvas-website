<?php 
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    include('dbConfig.php');

    $update = "UPDATE topjams SET views = views + 1 WHERE id = '".$id."'";

    if (mysqli_query($db, $update))
    {
        echo "Record updated successfully";
    } 
    else 
    {
        echo "Error updating record: " . mysqli_error($connect);
    }
    die;
}
?>