<?php 

require_once "config.php";

    $link = $_REQUEST['link'];
    $answers=$_REQUEST['answers'];
    $client = $_REQUEST['user'];

    $str = json_decode($answers, true);
    // echo json_encode($str);


        $query = mysqli_query($con, "INSERT INTO survey_answers (link, answers) VALUES ('$link', '$answers')");
        if($query)
            {
                $file = fopen("answers".$link.".txt", "w") or die ("Unable to open file");
                fwrite($file, $client);
                $txt = "\n\n";
                fwrite($file, $txt);
                $txt = "Answers\n";
                fwrite($file, $txt);
                $txt = $answers."\n";
                fwrite($file, $txt);
                fclose($file);

                 $user = mysqli_query($con, "SELECT email FROM user_table AS u INNER JOIN userquestions AS s ON u.userid = s.user WHERE s.link LIKE '$link' LIMIT 1");
                 $myemail = mysqli_fetch_assoc($user);


                 $mailto = 'sishubats@gmail.com';
                $subject = 'Answers';
                $message = 'My message';

                $content = file_get_contents($file);
                $content = chunk_split(base64_encode($content));

                // a random hash will be necessary to send mixed content
                $separator = md5(time());

                // carriage return type (RFC)
                $eol = "\r\n";

                // main header (multipart mandatory)
                $headers = "From: name <test@test.com>" . $eol;
                $headers .= "MIME-Version: 1.0" . $eol;
                $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                $headers .= "This is a MIME encoded message." . $eol;

                // message
                $body = "--" . $separator . $eol;
                $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                $body .= $message . $eol;

                // attachment
                $body .= "--" . $separator . $eol;
                $body .= "Content-Type: application/octet-stream; name=\" answers".$link.".txt \"" . $eol;
                $body .= "Content-Transfer-Encoding: base64" . $eol;
                $body .= "Content-Disposition: attachment" . $eol;
                $body .= $content . $eol;
                $body .= "--" . $separator . "--";
    


                   if(mail($to, $subject, $body, $headers)){
                      echo "<p id='phpmsg'>Sent Successfully! Thank you for your message, we will get back to you as soon as possible</p>";
                      }
                   else{
                      echo "Something went wrong!";
                   }


             echo 200;
            }
            else 
            {
            echo mysqli_error($con);
        }


        // echo $myemail['email']);


    
 

?>