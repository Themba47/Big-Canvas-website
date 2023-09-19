<?php 

	require_once "config.php";

	$userid = $email = $password = $confirm_password  = "";
	$email_err = $password_err = $confirm_password_err = "";

	function generateUserId() {
		$alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '01234567890';
		$characterAlpha = strlen($alpha);
		$characterNum = strlen($num);
		$randomString = '';
		for ($i=0 ; $i < 2 ; $i++ ) { 
			$randomString .= $alpha[rand(0, $characterAlpha - 1)];
		}
		for ($j=0 ; $j < 4 ; $j++ ) { 
			$randomString .= $num[rand(0, $characterNum - 1)];
		}

		return $randomString;

	}

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$country = $_POST['country'];

		if(empty(trim($_POST['email']))) {
			$email_err = "Please enter email";
		} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		  $email_err = "Invalid email format"; 
		} else {
			$sql = "SELECT userid FROM user_table WHERE email = ?";

			if($stmt = mysqli_prepare($con, $sql)) {
				mysqli_stmt_bind_param($stmt, "s", $param_email);

				// param_email is a temporary varibale used to check if the email exists.
				$param_email = trim($_POST["email"]);
				

				if(mysqli_stmt_execute($stmt)) {

					mysqli_stmt_store_result($stmt);

					if(mysqli_stmt_num_rows($stmt) == 1) {
						$email_err = "This email is already taken.";
					} else {
						$email = trim($_POST["email"]);
					}
				} else {
					echo "Oops! Something went wrong";
				}

				mysqli_stmt_close($stmt);
			}
		}

		$the_userid = generateUserId();
		$is_unique = false;

		while(!$is_unique) {
			$query = 'SELECT email FROM user_table WHERE userid = "'.$the_userid.'" ';
			$result = mysqli_query($con, $query) or die ("Couldn't execute query.");
			$n = mysqli_num_rows($result);
			if ($n < 1) {
				$is_unique = true;
				$userid = $the_userid;
			} else {
				$the_userid = generateUserId();
			}
		}

		// Validate Password
		if(empty(trim($_POST["password"]))) {
			$password_err = "Please enter a password.";
		} elseif(strlen(trim($_POST["password"])) < 8) {
			$password_err = "Password must have 8 characters.";
		} else {
			$password = trim($_POST["password"]);
		}

		if(empty(trim($_POST["confirm_password"]))) {
			$confirm_password_err = "Please confirm password.";
		} else {
			$confirm_password = trim($_POST["confirm_password"]);
			if(empty($password_err) && ($password != $confirm_password)) {
				$confirm_password_err = "Password did not match."; 
			}
		}

		if(empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
			$sql = "INSERT INTO user_table (userid, name, surname, email, country, password) VALUES (?, ?, ?, ?, ?, ?)";

			if($stmt = mysqli_prepare($con, $sql)) {
				mysqli_stmt_bind_param($stmt, "ssssss", $userid, $name, $surname, $email, $country, $param_password);

				
				$param_password = password_hash($password, PASSWORD_DEFAULT);

				if(mysqli_stmt_execute($stmt)) {
					header("location: login.php");
				} else {
					echo "Oops! Something went wrong. Please try again later.";
				}

				mysqli_stmt_close($stmt);
			}
		}

		mysqli_close($con);
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Canvas Sign Up</title>
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
	        <h2>Sign Up</h2>
	        <p>Please fill this form to create an account.</p>
	        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="bigcanvas_register" method="post">
	        	<div class="form-group">
	                <label>Name</label>
	                <input type="text" name="name" class="form-control" required>
	                
	            </div>
	            <div class="form-group">
	                <label>Surname</label>
	                <input type="text" name="surname" class="form-control" required>
	                
	            </div>
	            <div class="form-group">
	                <label>Email</label>
	                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
	                <span class="invalid-feedback"><?php echo $email_err; ?></span>
	            </div> 
	            <div class="form-group">
	                <label>Country</label>
	                <select name="country" id="country-field" class="form-control"></select>
	                
	            </div>   
	            <div class="form-group">
	                <label>Password</label>
	                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
	                <span class="invalid-feedback"><?php echo $password_err; ?></span>
	            </div>
	            <div class="form-group">
	                <label>Confirm Password</label>
	                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
	                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
	            </div>
	            <div class="form-group">
	                <input type="submit" id="submit-btn" class="btn btn-primary" value="Submit">
	                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
	            </div>
	            <p>Already have an account? <a href="login.php">Login here</a>.</p>
	        </form>
	    </div>  
    </div>


    <script>
    	

        fetch("country.json")
        .then(res => {
            return res.json();
        })
        .then(data => {
            let myObj = data;
            let output = `<option value="none">--- Select Country ---</option>`;
            myObj.forEach(country => {
                output += `<option value="${country.name}">${country.name} </option>`;
            });
            document.getElementById("country-field").innerHTML = output;
        })


    </script>  
</body>
</html>