<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>TheMatrix</title>
	<link rel="shortcut icon" type="image/png" href="img/fav.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include('head.php') ?>
	
<div class="main">
	<div class="mculo">
		<div class="name_of_page">
			<h2 class="title-page">Welcome to the Matrix</h2>
		</div>
		<div class="top_fifteen">
			<div class="bamba" id="music_list">
				<?php
					// Include the database configuration file
					include 'dbConfig.php';

					// Get songs from the database
					$query = $db->query("SELECT * FROM topjams ORDER BY views DESC");

					if($query->num_rows > 0){
					    while($row = $query->fetch_assoc()){
					        $beatURL = 'uploads/'.$row["file_name"];
					        $beatName = $row["song_title"];
					        $artist = $row["artist"];
					        $beatDate = $row["uploaded_on"];
					        $beatId = $row["id"];
					        $beatLink = $row["link"];
					        $beatViews = $row["views"];
					        $beatDowns = $row["downloads"];
					?>
					    <audio id="audio<?php echo $beatId; ?>">
						  <source src="<?php echo $beatURL; ?>" alt="" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
	
						<div class="container_song">
							<div class="controls">
								<a href="javascript:void(0)" class="plpa" id="firstplay<?php echo $beatId; ?>"><img src="img/play.svg" width="25" height="27"></a>
								<a href="javascript:void(0)" class="plpa" id="play<?php echo $beatId; ?>"><img src="img/play.svg" width="25" height="27"></a>
								<a href="javascript:void(0)" class="plpa" id="pause<?php echo $beatId; ?>"><img src="img/pause.svg" width="25" height="27"></a>
							</div>

							<div class="desc">
								<div class="slidergrey" id="greyslider<?php echo $beatId; ?>">
								    <div id="filbar<?php echo $beatId; ?>">
								        <input type="range" min="1" max="100" value="1" class="rslider" id="theslider<?php echo $beatId; ?>">
								    </div>
								</div>
								<p><strong><?php echo $beatName; ?> - <?php echo $artist; ?></strong></p>
								<p class="dag">Uploaded: <?php echo $beatDate; ?></p>
								<p class="number_downloads">Views: <?php echo $beatViews; ?>   Downloads: <?php echo $beatDowns; ?></p>
							</div>

							<div class="dwnl">
								<a href="ngoma.php?itemcode=<?php echo $beatLink?>" class="shareit" title="share"><img src="img/arrow-right-solid.svg" width="25" height="27"><p class="download1">Listen</p></a>
							</div>



							<script>
								var qala = document.getElementById("firstplay<?php echo $beatId; ?>");
								var dlala = document.getElementById("play<?php echo $beatId; ?>");
								var yeka = document.getElementById("pause<?php echo $beatId; ?>");
								dlala.style.display = 'none';
								yeka.style.display = 'none';
								qala.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').play();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'none'; 
									document.getElementById('firstplay<?php echo $beatId; ?>').style.display = 'none'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'inline-block';
					        		updateId(<?php echo $beatId; ?>);
					        	};
					        	dlala.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').play();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'none'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'inline-block';
					        	};
					        	yeka.onclick = () => { 
									document.getElementById('audio<?php echo $beatId; ?>').pause();
									document.getElementById('play<?php echo $beatId; ?>').style.display = 'inline-block'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'none';  
								};

								document.getElementById('audio<?php echo $beatId; ?>').addEventListener('timeupdate', function() {

								var position = document.getElementById('audio<?php echo $beatId; ?>').currentTime / document.getElementById('audio<?php echo $beatId; ?>').duration;

								if (position == 1) {
						
									document.getElementById('firstplay<?php echo $beatId; ?>').style.display = 'inline-block'; 
					        		document.getElementById('pause<?php echo $beatId; ?>').style.display = 'none';
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
					<?php }
					}else{ ?>
					    <p>No song(s) found...</p>
				<?php } ?>
			</div>	
		</div>
	</div>
</div>

<?php include('bottom.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

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



	function myFun() {
		  // Declare variables 
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("music_list");
		  tr = table.getElementsByTagName("div");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("p")[0];
		    if (td) {
		      txtValue = td.textContent || td.innerText;
		      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    } 
		  }
		}
</script>
<script src="js/player.js"></script>
</body>
</html>