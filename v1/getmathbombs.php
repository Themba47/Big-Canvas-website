<?php

require_once "../config.php";

	$category = $_REQUEST['category'];
	$query = mysqli_query($con, "SELECT question, options, answer, points FROM mathbomb WHERE category = '$category' ORDER BY RAND()");
	$rows = array();
	while($r = mysqli_fetch_assoc($query)) {
		$rows[] = $r;
		// shuffle($rows);
	}
	
	echo json_encode($rows);

	// $question = $_REQUEST['question'];
    //  $category = 'maths';
    //  $options = $_REQUEST['options'];
    //  $level = $_REQUEST['level'];
    //  $answer = $_REQUEST['answer'];
    //  $points = $_REQUEST['points'];
     

    //  $query = mysqli_query($con, "INSERT INTO mathbomb (question, category, level, options, answer, points) VALUES ('$question', '$category', $level, '$options', $answer, $points)");
    //  if($query)
    //  {
      
    //     echo 200;
    //  }
    //  else 
    //  {
      
    //      echo mysqli_error($con);
    //  }


?>