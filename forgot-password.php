<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email= $randomPassword = "";
$email_err = "";

function generateUserId() {
        $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '01234567890';
        $characterAlpha = strlen($alpha);
        $characterNum = strlen($num);
        $randomString = '';
        for ($i=0 ; $i < 4 ; $i++ ) { 
            $randomString .= $num[rand(0, $characterNum - 1)];
        }
        for ($j=0 ; $j < 4 ; $j++ ) { 
            $randomString .= $alpha[rand(0, $characterAlpha - 1)];
        }

        return $randomString;

    }
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
        $randomPassword = generateUserId();
        // $randomPassword = "AAAA1234";
        $hashPassword = password_hash($randomPassword, PASSWORD_DEFAULT);
    }
    
    
    
    // Validate credentials
    if(empty($email_err)) {

        $query = "UPDATE user_table SET password = '".$hashPassword."' WHERE email = '".$email."'";

        mysqli_query($con, $query) or die ("Couldn't execute query.");
        
    } else {
        echo "<p>Something not right!!!!</p>";
    }



    $to=$email;
    $subject="Big Canvas Password Recovery ";
    $headers = "From: info@bigcanvas.co.za \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers.="Big Canvas Password Recovery\r\n";
    
    
    $message="<h2>Temporary Password: \n".$randomPassword."</h2>\n";
    


   if(mail($to, $subject, $message, $headers)){
     header("location: login.php?Success");
      echo "<p id='phpmsg'>Password updated, please check your email<a href='login'>click here to return to login page</a></p>";
     
      }
   else{
      echo "Something went wrong!";
   }
    
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylelist.css">
    <style>
        body{ font: 14px sans-serif; }
        
    </style>
</head>
<body>
    <div class="outter-wrapper">
        <div class="wrapper">
        <h2>Forgot Password</h2>
        <p>Please enter your email</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email; ?></span>
            </div>    
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            
        </form>
    </div>
    </div>
</body>
</html>