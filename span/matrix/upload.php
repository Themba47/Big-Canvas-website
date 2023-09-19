<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";

if(isset($_POST["submit"])){
    if(!empty($_FILES["file"]["name"])){
       $fileName = basename($_FILES["file"]["name"]);
       $song = $_POST['song'];
       $artist = $_POST['artist'];
       $email = $_POST['email'];
       $views = 0;
       $downs = 0;
       $link = uniqid('', false);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

    // Allow certain file formats
    $allowTypes = array('mpeg-4','ogg','mp4','wav', 'mp3');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into topjams (file_name, song_title, artist, uploaded_on, views, link, email, downloads) VALUES ('".$fileName."', '".$song."', '".$artist."', NOW(), '".$views."', '".$link."', '".$email."', '".$downs."')");
            if($insert){
                $statusMsg = "<p id='msg_success'>The file ".$fileName. " has been uploaded successfully. <a href='index.php'>Return to home page</a></p>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
}

// Display status message
//echo $statusMsg;
?>