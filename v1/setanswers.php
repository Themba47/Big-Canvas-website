<?php
require_once "../config.php";

if(isset($_POST['user_details'])){
    $user_details = json_decode($_POST['user_details'], true);
    $answers = json_decode($_POST['answers'], true);

    $link = $user_details['link'];
    $userid = $user_details['userid'];
    $name = $user_details['name_user'];
    $email = $user_details['email_user'];

    for ($i=0; $i < count($answers); $i++) {
        $qtn = $answers[$i]['question'];
        $answer = $answers[$i]['answer']; 
        $query = mysqli_query($con, "INSERT INTO survey_answers (link, name_user, email_user, question, answer) VALUES ('$link', '$name', '$email', '$qtn', '$answer')");
        
    }

if($query)
{


}
else 
{

}

$result = mysqli_fetch_assoc(mysqli_query($con, "SELECT email FROM user_table WHERE userid like '".$userid."' "));
$to = $result['email'];
$subject = $user_details['survey_name'];
$from = 'info@bigcanvas.co.za';

 
    // To send HTML mail, the Content-type header must be set
    // $headers  = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // // Create email headers
    // $headers .= 'From: '.$from."\r\n".
    //     'Reply-To: '.$from."\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    $message = '<h1>'.$user_details['survey_name'].'</h1><br><p>Done by: '.$name.' Email: '.$email.'</p>';
    
for ($i=0; $i < count($answers); $i++) {    
    // Compose a simple HTML email message
    $message .= "<p>".$i." Question: ".$answers[$i]['question']."<br>Answer: ".$answers[$i]['answer']."</p><br>";
}
    
    // // Sending email
    // if(mail($to, $subject, $message, $headers)){
    //     echo 'Your mail has been sent successfully.';
    // } else{
    //     echo 'Unable to send email. Please try again.';
    // }

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

}
?>