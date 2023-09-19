<?php
  session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
    
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A blog post written by Themba Sishuba about how to go about learning how to code">
  <meta name="keywords" content="blog, coder, Johannesburg">
  <meta name="theme-color" content="#111f3b"/>
	<title>Big Canvas | Johannesburg</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
</head>
<body>
	<?php include('head.php') ?>

<div class="main" id="lebron">
    
            <div class="page-loader" id="pge-load">
    			<div class="loader">
    				<img src="img/sun_loader.png">
    			</div>
		    </div>
			
			<section class="section" id="welcome-page2">
					<div class="love" id="background-vid-mobile">
						<div class="page_header">
							<h1>Gallery</h1>
						</div>
					</div>
					<video width="100%" id="background-vid-desktop" autoplay muted loop playsinline>
  						<source src="img/g2.mov" type="video/mp4">
					</video>
					
		</section>
			
		<div class="container" id="gallery-work">
		    
		    <section class="section" id="info" data-aos="fade-right">
				<a href="canvas/1">
					<div class="love">
						<div class="diespan mereko" id="werk2">
							<h1>Audio Line</h1><br>
						</div>
					</div>
				</a>
			</section>
			
			<section class="section" id="info" data-aos="fade-right">
				<a href="canvas/6">
					<div class="love">
						<div class="diespan mereko" id="werk3">
							<h1>Circle lights</h1><br>
						</div>
					</div>
				</a>
			</section>
		    
		    <section class="section" id="info" data-aos="fade-left">
				<a href="canvas/2">
					<div class="love">
						<div class="diespan mereko" id="werk4">
							<h1>Audio Bars Top & Bottom</h1><br>
						</div>
					</div>
				</a>
			</section>
			
			<section class="section" id="info" data-aos="fade-right">
				<a href="canvas/3">
					<div class="love">
						<div class="diespan mereko" id="werk5">
							<h1>Audio Sun</h1><br>
						</div>
					</div>
				</a>
			</section>
			
			<section class="section" id="info" data-aos="fade-left">
				<a href="canvas/4">
					<div class="love">
						<div class="diespan mereko" id="werk7">
							<h1>Spiral Vibrations</h1><br>
							<p></p>
						</div>
					</div>
				</a>
			</section>
			
			<section class="section" id="info" data-aos="fade-right">
				<a href="canvas/5">
					<div class="love">
						<div class="diespan mereko" id="werk6">
							<h1>Departing Steps</h1><br>
						</div>
					</div>
				</a>
			</section>
			

		</div>
	</div>

	<?php include('bottom.php') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="js/ga.js"></script>
<script src="js/main.js"></script>
</body>
</html>