<?php 
session_start();
require_once "../config.php";


if(isset($_POST['details']))
{
    $userid = $_SESSION["userid"];
    $details = json_decode($_POST['details'], true);
    $questions = json_decode($_POST['questions'], true);
    $link = generateUserId();
    $is_unique = false;

        while(!$is_unique) {
            $query = 'SELECT link FROM surveys WHERE link = "'.$link.'" ';
            $result = mysqli_query($con, $query) or die ("Couldn't execute query.");
            $n = mysqli_num_rows($result);
            if ($n < 1) {
                $is_unique = true;
                $color = $details['backgroundColor'];
                $questionName = $details['question'];
                $query = mysqli_query($con, "INSERT INTO surveys (userid, link, survey_name, backgroundColor) VALUES ('$userid', '$link', '$questionName', '$color')");
            } else {
                $link = generateUserId();
            }
        }

        $update_user = mysqli_query($con, "UPDATE user_table SET survey_token = ".$_POST['usedqtns']." WHERE userid = '".$_SESSION["userid"]."' ");


        for ($i=0; $i < count($questions); $i++) {
            $qtn = $questions[$i]['question'];
            if($questions[$i]['options']) {
                $optionA = $questions[$i]['optionA'];
                $optionB = $questions[$i]['optionB'];
                $optionC = $questions[$i]['optionC'];
                $optionD = $questions[$i]['optionD'];
                $query = mysqli_query($con, "INSERT INTO survey_questions (userid, link, question, options, optionA, optionB, optionC, optionD) VALUES ('$userid', '$link', '$qtn', 1, '$optionA', '$optionB', '$optionC', '$optionD')");
            } else {
                $query = mysqli_query($con, "INSERT INTO survey_questions (userid, link, question, options) VALUES ('$userid', '$link', '$qtn', 0)");
            }
        }

    if($query)
    {
        $mylink = 'https://www.bigcanvas.co.za/v1/survey.php?survey='.$link;

    
    $result = mysqli_fetch_assoc(mysqli_query($con, "SELECT email FROM user_table WHERE userid like '".$userid."' "));
    $to = $result['email'];
    $from="info@bigcanvas.co.za";
    $subject='Link to your survey';
    
    $message="Here is your link: ".$mylink;
    


    $msg = [
        'toemail' => $to,
        'fromemail' => $from,
        'subject' => $subject,
        'newsletter' => $message 
    ];

    // Initialise the curl handle
$ch = curl_init();

// Setup curl
curl_setopt($ch, CURLOPT_URL,"https://www.marketonweb.co.za/sendemail");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($msg));

// send to mow
$result = curl_exec($ch);

// close the connection
curl_close($ch);

        $_SESSION["msg"] = "<p id='phpmsg'>Here is your link</p>"; 
        require("../globalvariables.php");
        echo $msg;

    }
    else 
    {
      $_SESSION["msg"] = "<p id='phpmsg' style='background-color: red;'>Error while adding to database</p>";
        echo mysqli_error($con);
}
    }

    function generateUserId() {
        $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $num = '01234567890';
        $characterAlpha = strlen($alpha);
        $characterNum = strlen($num);
        $randomString = '';
        for ($i=0 ; $i < 6 ; $i++ ) { 
            $randomString .= $alpha[rand(0, $characterAlpha - 1)];
        }
        for ($j=0 ; $j < 2 ; $j++ ) { 
            $randomString .= $num[rand(0, $characterNum - 1)];
        }

        return $randomString;

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
  <meta property="og:image" content="http://www.sishuba.co.za/quizimg/kaapstad.jpg">
  <meta property="og:url" content="https://bit.ly/3a7IK4H">
  <meta name="twitter:card" content="summary_large_image">

    <title>Survey Link</title>
    <link rel="shortcut icon" type="image/png" href="img/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylequiz.css">
</head>
<body>

<div class="main" id="lebron">
        <div class="container">
            
            <div class="theprices">
                <div class="pricelists" id="thequiz">
                    
                    <h1>
                        <?php $details['question']; ?>
                    </h1><br>
                    
                    <div class="form-group">
						<input type="text" id="dielink" cols=60 rows=5 class="form-control" value="<?php echo $mylink; ?>" readonly>
                        <button onclick="copyLink()">Copy Text</button>
					</div>       

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
