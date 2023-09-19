<?php

require_once "config.php";

	$level = $_REQUEST['level'];
	$query = mysqli_query($con, "SELECT * FROM questions WHERE level = $level ORDER BY RAND() LIMIT 20");
	$rows = array();
	while($r = mysqli_fetch_assoc($query)) {
		$rows[] = $r;
		// shuffle($rows);
	}
	
	echo json_encode($rows);

// 	$question = $_REQUEST['question'];
//      $level = $_REQUEST['level'];
//      $choiceA = $_REQUEST['choiceA'];
//      $choiceB = $_REQUEST['choiceB'];
//      $choiceC = $_REQUEST['choiceC'];
//      $choiceD = $_REQUEST['choiceD'];
//      $correct = $_REQUEST['correct'];
//      $image = $_REQUEST['image'];;

//      $query = mysqli_query($con, "INSERT INTO questions (question, level, ChoiceA, ChoiceB, ChoiceC, ChoiceD, correct, image) VALUES ('$question', 2, '$choiceA', '$choiceB', '$choiceC', '$choiceD', '$correct', '$image')");
//      if($query)
//      {
      
//         echo 200;
//      }
//      else 
//      {
      
//          echo mysqli_error($con);
//      }


?>