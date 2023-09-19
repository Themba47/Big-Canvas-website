<?php

require_once "config.php";

$file = $mylink = '';


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
             
                    $mylink = 'http://localhost:8080/quiz/survey.php?survey='.$link;
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


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157351814-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157351814-1');
</script>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How well do you know South Africa. play the 60 second quiz to find out.| Johannesburg">

  <meta property="og:title" content="How well do you know South Africa. play the quiz to find out.">
  <meta property="og:image" content="http://www.sishuba.co.za/quizimg/kaapstad.jpg">
  <meta property="og:url" content="https://bit.ly/3a7IK4H">
  <meta name="twitter:card" content="summary_large_image">

  <meta name="keywords" content="quiz, play, South Africa, Johannesburg">
    <title>How well do you know your country | South Africa</title>
    <link rel="shortcut icon" type="image/png" href="img/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylequiz.css">
</head>
<body>
    <?php include('headquiz.php') ?>

<div class="main" id="lebron">
        <div class="container">
            
            <section class="blog-page" id="page-blog">
                <div class="love">
                    <div class="content-blog" >
                        <h2 id="masego">How well do you know your country, South Africa?</h2><br><br>
                        <h1 id="will-begin">Start Quiz</h1>
                    </div>
                </div>
            </section>

            <div class="theprices">
                <div class="pricelists" id="thequiz">
                    
                    <h1>
                        <?php echo $title; ?>
                    </h1><br>
                    
                    <input type="text" id="dielink" value="<?php echo $mylink; ?>" readonly>
                    <button onclick="copyLink()">Copy Text</button>         

                </div>
            </div>


        </div>
    </div>

  <div id="theright"></div>
  

    <?php include('bottom.php') ?>
    <script>
        function copyLink() {
  /* Get the text field */
  var copyText = document.getElementById("dielink");

  /* Select the text field */
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
    </script>

</body>
</html>