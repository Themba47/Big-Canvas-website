<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: ../login");
	exit;
}


require_once "../config.php";
$result = mysqli_query($con, "SELECT survey_token FROM user_table WHERE userid = '".$_SESSION["userid"]."' ") or die ("Couldn't execute query.");
$usertoken = mysqli_fetch_assoc($result);
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

  <meta property="og:url" content="https://bit.ly/3a7IK4H">
  <meta name="twitter:card" content="summary_large_image">

	<title>Create Survey</title>
	<link rel="shortcut icon" type="image/png" href="img/fav.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylequiz.css">
	<style>
		.main {
    margin-top: 60px;
  }
		#qtnbox {
			background-color: #1e1f31;
			color: #fff;
			width: 100%;
		}

@media (max-width: 768px) {
  .main {
    margin-top: 40px;
  }
  #qtnbox {
			width: 80vw;
  }
  .main-two {
	  display: grid;
	  place-items: center;
  }
}
	</style>
</head>
<body>
	<?php include('head.php') ?>

	<div class="main" id="lebron">
		<div class="container">
			<div class="form-check-inline container-input">
				<label class="form-check-label">
					<input type="checkbox" name="mycheckbox" class="form-check-input" id="mycheckbox"> Add Options 
				</label>
			</div>
			<div class="main-two">
					<div id="qtnbox">
						<div class="form-group">
							<label>Name of your survey</label>
							<input name="love" id="question" cols="30" rows="5" placeholder="Name of your survey" class="question form-control" />
						</div>
						<label>Select survey color</label>
						<div id="color-option">
							<a href="javascript:void(0)" title="#d8fff7" class="color-display" onclick="addColor('#d8fff7')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>
							<a href="javascript:void(0)" title="#fad8ff" class="color-display" onclick="addColor('#fad8ff')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>
							<a href="javascript:void(0)" title="#d8efff" class="color-display" onclick="addColor('#d8efff')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>
							<a href="javascript:void(0)" title="#fff" class="color-display" onclick="addColor('#fff')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>
							<a href="javascript:void(0)" title="#ffe5e0" class="color-display" onclick="addColor('#ffe5e0')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>
							<a href="javascript:void(0)" title="#1e1f31" class="color-display" onclick="addColor('#1e1f31')">
								<p>Question 1</p>
								<div>Answer<br><br></div>
								<br>
							</a>

						</div>
						<input type="hidden" value="#fff" id="mycolor">
						<div class="form-group">
							<button id="faka" onclick="faka()">Start</button>
						</div>
					</div>
					<h1 id="error" style="color: rgb(188, 35, 35);"></h1>
			</div>
			<button id="done-btn" onclick="submitSurvey()">Done</button>
		</div>
	</div>

	<div id="myform"></div>
	<!--<?php include('bottom.php') ?>-->

<script>
	let numberOfquestions = <?php echo $usertoken['survey_token']; ?>;
	console.log(numberOfquestions);
	if (numberOfquestions <= 0) {
    numberOfquestions = 7;
  }

</script>
<script src="js/survey.js"></script>
</body>
</html>