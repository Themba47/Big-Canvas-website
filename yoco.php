<?php
	session_start();
	require_once "config.php";

if (isset($_POST['token'])) {

    $yoco_token = $_POST['token']; 
    $yoco_ticket = (int)$_POST['ticket'];
    $yoco_value = (int)($_POST['price']);

    // values extracted from request
$data = [
    'token' => $yoco_token, // Your token for this transaction here
    'amountInCents' => $yoco_value, // payment in cents amount here
    'currency' => 'ZAR' // currency here
];


// Anonymous test key. Replace with your key.
$secret_key = 'sk_live_831ada57z7KoWAB27534f6583576';

// Initialise the curl handle
$ch = curl_init();

// Setup curl
curl_setopt($ch, CURLOPT_URL,"https://online.yoco.com/v1/charges/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Basic Authentication method
// Specify the secret key using the CURLOPT_USERPWD option
curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// send to yoco
$result = curl_exec($ch);
curl_getinfo($ch, CURLINFO_HTTP_CODE);

// close the connection
curl_close($ch);

// convert response to a usable object
$response = json_decode($result, true);
    
    if($response['status'] == "successful") {
        $query = mysqli_query($con, "UPDATE user_table SET survey_token = survey_token + ".$yoco_ticket." WHERE userid = '".$_SESSION["userid"]."' ");
        $_SESSION["msg"] = "<p id='phpmsg'>Purchase succesful"; 
        header("location: index.php");
    }

//     $to='sishubats@gmail.com';
//     $headers="info@bigcanvas.co.za";
//     $subject='Big Canvas client: '.$name."\n";
    
//     $message="Name: ".$name."\n"."Email: ".$email."\n"."Whatsapp number: ".$whatsapp."\n"."message: ".$msg."\n";
    


//    if(mail($to, $subject, $message, $headers) && $query){
//       echo "<p id='phpmsg'>Sent Successfully! Thank you for your message, we will get back to you as soon as possible</p>";
//       }
//    else{
//       echo "Something went wrong!";
//    }
}

?>