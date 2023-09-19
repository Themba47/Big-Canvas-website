<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2085627779889164"
     crossorigin="anonymous"></script>
    
    
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
					
					<div class="dieprice" id="question-1" style="display: none">
						<div id="id-qtn"></div>
						<div id="stombe"></div>
						<div id="question"></div>
						<div class="choices">
							<div class="choice" id="A" onclick="checkAnswer('A')"></div>
							<div class="choice" id="B" onclick="checkAnswer('B')"></div>
							<div class="choice" id="C" onclick="checkAnswer('C')"></div>
							<div class="choice" id="D" onclick="checkAnswer('D')"></div>
						</div>
					</div>

					<div class="dieprice" id="finalscore">
						<div id="score"></div>
					</div>					

				</div>
			</div>


		</div>
	</div>

  <div id="theright"></div>
  

	<?php include('bottom.php') ?>

	<?php include('tabquiz.php') ?>

<script src="js/maintwo.js"></script>
</body>
</html>