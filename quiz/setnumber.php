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
	<title>Set Questions</title>
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
						<h2 id="masego">Set Questions</h2><br><br>
						
					</div>
				</div>
			</section>

			<div class="theprices">

				
				<form action="setquestions.php" method="GET" enctype='multipart/form-data'>
						<h3>Title Of Survey</h3>
						<input type="text" name="title" placeholder="Title"><br>
						<h3>Select number of questions</h3>
						<select name="numberofquestions">
							<option>10</option>
							<option>15</option>
							<option>20</option>
						</select><br><br>
					<button type="submit" name="submit" data-submit="...Sending">Submit</button><br><br>
				</form>


			</div>


		</div>
	</div>

  <div id="theright"></div>
  

	<?php include('bottom.php') ?>


<script src="js/main.js"></script>
</body>
</html>