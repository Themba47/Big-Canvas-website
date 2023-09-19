<?php 
session_start();
require_once "config.php";


if(isset($_POST['userid']))
{
    $userid = $_POST['userid'];
    $canvas_type = $_POST['canvas_type'];
    $link = $_POST['link'];

    // $con = mysqli_connect("dva.aserv.co.za", "bigcabbx_thiza47","Sishuba47","bigcabbx_creditor") or die("ERROR");

    $query = mysqli_query($con, "INSERT INTO download_table (userid, canvas_type, link) VALUES ('$userid', $canvas_type, '$link')");
    if($query)
    {
      header("location: index.php");
      $_SESSION["msg"] = "<p id='phpmsg'>Downloading</p>"; 

    }
    else 
    {
      $_SESSION["msg"] = "<p id='phpmsg' style='background-color: red;'>Error while adding to database</p>";
        // echo mysqli_error($con);
}
    }

?>