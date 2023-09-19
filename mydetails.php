<?php 

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}

	require_once "config.php";

	$userid = $email = $password = $confirm_password  = "";
	$email_err = $password_err = $confirm_password_err = "";

	if(isset($_POST['submit'])) {
		$email = $_SESSION['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		if($password == $confirm_password) {
			$param_password = password_hash($password, PASSWORD_DEFAULT);
			$query = 'UPDATE user_table SET password = "'.$param_password.'" WHERE email = "'.$email.'" ';
			$result = mysqli_query($con, $query) or die ("Couldn't execute query.");
            $_SESSION["msg"] = "<p id='phpmsg'>Password updated</p>"; 
            
            // Redirect user to welcome page
            header("location: index.php");

		} else {
			$_SESSION["msg"] = "<p id='phpmsg'>Something went wrong</p>"; 
		}
	}
	 // Close connection
	 mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Details</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
    <style>
        body{ font: 14px sans-serif; }
    </style>
</head>
<body>
    <div class="outter-wrapper">
    	<div class="wrapper" id="register_form">
	        <h2>My Details</h2>
	        <p>Update your password</p>
	        <form action="mydetails.php" name="bigcanvas_register" method="post">
	            <div class="form-group">
	                <h4><b><?php echo $_SESSION["email"]?></b></h4>
	            </div>    
	            <div class="form-group">
	                <label>Enter New Password</label>
	                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
	                <span class="invalid-feedback"><?php echo $password_err; ?></span>
	            </div>
	            <div class="form-group">
	                <label>Confirm Password</label>
	                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
	                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
	            </div>
	            <div class="form-group">
	                <input type="submit" name="submit" id="submit-btn" class="btn btn-primary" value="Save">
	            </div>
	            <a href="index.php">Return to homepage.</a>
	        </form>
	    </div>  
    </div>  
</body>
</html>