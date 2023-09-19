<?php

include 'dbConfig.php';
$code=$_REQUEST['itemcode'];
$query = "SELECT * FROM topjams " .
"where link like '$code'";
$results = mysqli_query($db, $query) or die(mysql_error()); // #1 
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
$beatNaam = $row["song_title"];
$beatURL = 'uploads/'.$row["file_name"];
$artist = $row["artist"];
$email = $row["email"];
$beatDate = $row["uploaded_on"];
$beatId = $row["id"];
$beatLink = $row["link"];
$beatViews = $row["views"];
$beatDowns = $row["downloads"]; 
extract($row);

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Listen <?php echo $beatNaam ?> by <?php echo $artist ?></title>
	<link rel="shortcut icon" type="image/png" href="img/fav.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php include('head.php') ?>
	<style>
		.opening {
			display: none;
		}
	</style>

	<div class="main">
		<div class="ingoma">
			<div class="main_song">

				<audio id="audio<?php echo $beatId; ?>">
						  <source src="<?php echo $beatURL; ?>" alt="" type="audio/mpeg">
							Your browser does not support the audio element.
				</audio>

				<div class="istombe">
					<div class="the-stombe">
						<img class="vynl" src="img/thevynl.png" width="90%">
					</div>
				</div>
				<div class="amadetails">
					<h3 id="egama"><?php echo $beatNaam ?></h3>
					<p id="song_artist"><?php echo $artist ?></h2>
					<div class="desc">
							<div class="slidergrey" id="greyslider<?php echo $beatId; ?>"><div id="filbar<?php echo $beatId; ?>"></div></div>
							<input type="range" min="1" max="100" value="1" class="rslider" id="theslider<?php echo $beatId; ?>">
							<p class="dag">Uploaded: <?php echo $beatDate; ?></p>
							<p class="number_downloads">Views: <?php echo $beatViews; ?>  Downloads: <?php echo $beatDowns; ?></p><br>
							<p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
					</div>
				</div>
				<div class="amanobs">
					<div class="share_btns">
							<a href="javascript:void(0)" class="shareit" title="share"><img src="img/share.svg" width="25" height="27"></a>
					</div>
					<div class="controls">
							<a href="javascript:void(0)" class="plpa" id="firstplay<?php echo $beatId; ?>"><img src="img/play.svg" width="25" height="27"></a>
							<a href="javascript:void(0)" class="plpa" id="play<?php echo $beatId; ?>"><img src="img/play.svg" width="25" height="27"></a>
							<a href="javascript:void(0)" class="plpa" id="pause<?php echo $beatId; ?>"><img src="img/pause.svg" width="25" height="27"></a>
					</div>
					<div class="dwnl">
							<a href="<?php echo $beatURL; ?>" id="down<?php echo $beatId; ?>" title="download" download><img class="dd" src="img/dwnld.svg" width="12" height="12"></a>
					</div>
				</div>
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="share-nobs">
								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_twitter"></a>
								<a class="a2a_button_whatsapp"></a>
							</div>

				<script>
								var qala = document.getElementById("firstplay<?php echo $beatId; ?>");
								var tata = document.getElementById("down<?php echo $beatId; ?>"); 
								var dlala = document.getElementById("play<?php echo $beatId; ?>");
								var yeka = document.getElementById("pause<?php echo $beatId; ?>");
								var spinVynl = document.querySelector('.vynl');
								spinVynl.style.animationPlayState = 'paused';
								dlala.style.display = 'none';
								yeka.style.display = 'none';
								qala.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').play();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'none'; 
									document.getElementById('firstplay<?php echo $beatId; ?>').style.display = 'none'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'inline-block';
					        		updateId(<?php echo $beatId; ?>);
					        		spinVynl.style.animationPlayState = 'running';
					        	};
					        	dlala.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').play();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'none'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'inline-block';
					        		spinVynl.style.animationPlayState = 'running';
					        	};
					        	yeka.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').pause();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'inline-block'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'none';  
					        		spinVynl.style.animationPlayState = 'paused';
								};

								tata.onclick = () => {
									updateDown(<?php echo $beatId; ?>);
								}

								document.getElementById('audio<?php echo $beatId; ?>').addEventListener('timeupdate', function() {

								var position = document.getElementById('audio<?php echo $beatId; ?>').currentTime / document.getElementById('audio<?php echo $beatId; ?>').duration;

								if (position == 1) {
						
									document.getElementById('firstplay<?php echo $beatId; ?>').style.display = 'inline-block'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'none';
					        		spinVynl.style.animationPlayState = 'paused';
								};

								document.getElementById('theslider<?php echo $beatId; ?>').value = position * 100;
								document.getElementById('filbar<?php echo $beatId; ?>').style.width =  position * 100 + "%";
								document.getElementById('filbar<?php echo $beatId; ?>').style.backgroundColor =  "#f2360b";
								document.getElementById('filbar<?php echo $beatId; ?>').style.height =  "4px";
								});

								document.getElementById('theslider<?php echo $beatId; ?>').addEventListener("change", seekto, false)
								document.getElementById('audio<?php echo $beatId; ?>').addEventListener("timeupdate", seektimeupdate, false)

								function seekto() {
									var seekto = document.getElementById('audio<?php echo $beatId; ?>').duration * (document.getElementById('theslider<?php echo $beatId; ?>').value / 100);
									document.getElementById('audio<?php echo $beatId; ?>').currentTime = seekto;
								}

								function seektimeupdate () {
									var nt = document.getElementById('audio<?php echo $beatId; ?>').currentTime * (100 / document.getElementById('audio<?php echo $beatId; ?>').duration);
									document.getElementById('theslider<?php echo $beatId; ?>').value = nt;
								}

							</script>

			</div>
		</div>
	</div>

	<script async src="https://static.addtoany.com/menu/page.js"></script>
	<script src="js/player.js"></script>
	<script>

	var sha = document.querySelector('.shareit');
	var shaNobs = document.querySelector('#share-nobs');
	shaNobs.style.display = 'none';

	sha.onclick = () => {
		shaNobs.style.display = 'block';
	}

	function updateId(id) {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
	        {
	            
	        }
	    };
	    xmlhttp.open("GET", "like.php?id=" +id, true);
	    xmlhttp.send();
}

function updateDown(id) {
	    var xmlhtap = new XMLHttpRequest();
	    xmlhtap.onreadystatechange = function() {
	        if (xmlhtap.readyState == 4 && xmlhtap.status == 200) 
	        {
	            
	        }
	    };
	    xmlhtap.open("GET", "downloads.php?id=" +id, true);
	    xmlhtap.send();
}
	</script>
</body>
</html>
