<?php 
	include 'upload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Upload your music</title>
	<link rel="shortcut icon" type="image/png" href="img/fav.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style> 
		#user-on-head, #nav, .opening {
	display: none;
}
	</style>
</head>
<body>
	<?php include('head.php') ?>

	<div class="main" id="form_main">
		<?php echo $statusMsg; ?>
		<div class="upload_papier">
			<div class="content" id="id_content">
				<form action="home.php" method="post" id="upload_form" enctype="multipart/form-data">
					<a href="#" onclick="vulaImage()">Upload music <img src="img/upload.svg" style="transform: translateY(5px);"></a><br><br>
				    <div id="lil_form" style="font-size: 18px;">
				    	<p id="ye_uploaded"></p>
				    	<label style="font-size: 18px;">Name of Song</label><br>
					    <input type="text" id="die_bina" name="song" required><br>
					    <label style="font-size: 18px;">Name of Artist</label><br>
					    <input type="text" id="die_artist" name="artist" required><br>
					    <label style="font-size: 18px;">Your email</label><br>
					    <input type="email" id="die_email" name="email" required placeholder="Email"><br>
					    <input type="file" id="die_button" name="file" onchange="makeMagic()"><br>
				    	<input type="submit" id="die_submit" name="submit" value="Submit" onclick="geza()">
				    </div>
				</form>
			</div>
		</div>
	</div>

	<?php include('bottom.php') ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>