<?php

require_once "config.php";

$file = '';


if (isset($_POST['submit'])) {

    $file = $_FILES['file'];
    $link = generateUserId();
    $title = $_POST['title'];
    $question=$_POST['question'];
    $choiceA=$_POST['choiceA'];
    $choiceB=$_POST['choiceB'];
    $choiceC=$_POST['choiceC'];
    $choiceD=$_POST['choiceD'];
    $correct=$_POST['correct'];
    $is_unique = false;
    //echo json_encode($file);

        while(!$is_unique) {
            $query = 'SELECT link FROM userquestions WHERE link = "'.$link.'" ';
            $result = mysqli_query($con, $query) or die ("Couldn't execute query.");
            $n = mysqli_num_rows($result);
            if ($n < 1) {
                $is_unique = true;
            } else {
                $link = generateUserId();
            }
        }

    for ($i=0; $i < count($question); $i++) { 
        if(empty(trim($question[$i]))) {
            $question[$i] = "";
        }
        if(empty(trim($choiceA[$i]))) {
            $choiceA[$i] = " ";
        }
        if(empty(trim($choiceB[$i]))) {
            $choiceB[$i] = '';
        }
        if(empty(trim($choiceC[$i]))) {
            $choiceC[$i] = '';
        }
        if(empty(trim($choiceD[$i]))) {
            $choiceD[$i] = '';
        }
        if(empty(trim($correct[$i]))) {
            $correct[$i] = '';
        }

        if(empty(trim($file['name'][$i]))) {
            $image[$i] = null;
        } else {
            $image[$i] = uploadImg($file['name'][$i], $file['size'][$i], $file['tmp_name'][$i], $file['error'][$i], $file['type'][$i] );
            print($image[$i]);
            print(" Image uploaded!!!");
        }
        $query = mysqli_query($con, "INSERT INTO userquestions (user, link, title, question, ChoiceA, ChoiceB, ChoiceC, ChoiceD, correct, image) VALUES ('Sishuba', '$link', '$title', '$question[$i]', '$choiceA[$i]', '$choiceB[$i]', '$choiceC[$i]', '$choiceD[$i]', '$correct[$i]', '$image[$i]')");
        if($query)
            {
             
                    // Take to page where link exists and also email the link to the users email.
            }
            else 
            {
              
                echo mysqli_error($con);
        }
    }

    echo json_encode($question);
    echo " ";
    echo json_encode($choiceA);
    
 
}

function generateUserId() {
        $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $num = '01234567890';
        $characterAlpha = strlen($alpha);
        $characterNum = strlen($num);
        $randomString = '';
        for ($i=0 ; $i < 4 ; $i++ ) { 
            $randomString .= $alpha[rand(0, $characterAlpha - 1)];
        }
        for ($j=0 ; $j < 2 ; $j++ ) { 
            $randomString .= $num[rand(0, $characterNum - 1)];
        }

        return $randomString;

    }

function uploadMyImg($ev) {
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $newfilename);
    return $newfilename;
}

function uploadImg($fname, $fSize, $ftmpName, $fError, $fType) {

    $fileName = $fname;
    $fileTmpName = $ftmpName;
    $fileSize = $fSize;
    $fileError = $fError;
    $fileType = $fType;
    $fileNameNew = '';
    $fileExt = explode('.', $fname);
    $fileActualExt = strtolower(end($fileExt));

    $allowed =  array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination); 
                //header("Location: index.php?uploadsuccess");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }

    return $fileNameNew;
}

?>