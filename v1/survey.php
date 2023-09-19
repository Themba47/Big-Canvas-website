<?php 
      require_once "../config.php";
      // Get canvas from the database
      $code=$_REQUEST['survey'];
	  $t = mysqli_query($con, "SELECT * FROM surveys WHERE link like '$code' ");
	  $title = mysqli_fetch_array($t, MYSQLI_ASSOC);
      $query = mysqli_query($con, "SELECT * FROM survey_questions WHERE link like '$code' ");
      $rows = array();
      while($r = mysqli_fetch_assoc($query)) {
        $rows[] = $r;
        // shuffle($rows);
      }
      
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
	<meta name="description" content="">
  <meta name="keywords" content="quiz, play, South Africa, Johannesburg">
	<title><?php echo $title['survey_name']; ?></title>
	<link rel="shortcut icon" type="image/png" href="img/fav.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylequiz.css">
	<style>
		#question-container {
			display: grid;
			place-items: center;
		}
	</style>
</head>
<body>

	<div class="main" id="lebron" style="background-color: <?php echo $title['backgroundColor']; ?>">
		<div class="container">
			<div class="main-two">
				<div id="question-container">
					
				</div>
			</div>
		</div>
	</div>

  <div id="theright"></div>
  <div style="display: none;" id="nxtlvl"><a href='levelthree.php'>Next Level</a></div>
  <div style="display: none;" id="rstart">leveltwo.php</div>
  

	<?php include('bottom.php') ?>


<script>
	let code = [<?php echo json_encode($code); ?>, <?php echo json_encode($title['survey_name']); ?>, <?php echo json_encode($title['userid']); ?>];
	let questions = [];
  questions = <?php echo json_encode($rows); ?>;
</script>
<script src="js/survey.js"></script>
<script>
	document.querySelector(".main").style.color = colorObj["<?php echo $title['backgroundColor']; ?>"];
	
	// Modifies the answer box and adds the required css
function insertColors() {
  document.querySelectorAll(".form-control").forEach((element) => {
    element.style.cssText = `border: 1.5px solid  ${colorObj["<?php echo $title['backgroundColor']; ?>"]}; color: ${colorObj["<?php echo $title['backgroundColor']; ?>"]}; background-color: transparent`;
  });
}

	insertColors();
	nextQtn();
</script>
</body>
</html>