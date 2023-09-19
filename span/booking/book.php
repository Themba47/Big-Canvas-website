<!DOCTYPE html>
<?php

if (isset($_POST['submit'])) {
    $name=$_POST['naam'];
    $surname=$_POST['van'];
    $date=$_POST['date'];
    $cell=$_POST['phone_no'];
    $barber=$_POST['barber'];

    $to='thizasishuba@gmail.com';
    $headers="From: ".$email;
    $subject='Message'."\n"."Name: ".$name."\n";
    
    $message="Name: ".$name."\n\n"."Surname: ".$van."\n\n"."Date: ".$date."\n"."cell: ".$cell;
    


   if(mail($to, $subject, $message, $headers)){
      echo "<p style='background-image: linear-gradient(yellow, green, green); color: white; padding-top: 100px; z-index: 3;'>Sent Successfully! Thank you for your message, we will get back to you as soon as possible/a></p>";
      }
   else{
      echo "Something went wrong!";
   }
}

?>

<html>
<head>
	<title>Big Canvas</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body onscroll="myScroll()">
	<?php include('head.php');
	
	?>

	<form action="book.php" method="post">
        <div id="bookform">
            <h3 colspan="2" align="center">Make booking</h3>
            <br>
            <label>Name  </label><br><input size="20" type="text"
            name="naam" required></br></br>
            <label>Surname  </label><br><input size="20" type="text"
            name="van" required><br><br>
            <label>select barber: </label><br>
            <select name="barber">
			    <option value="volvo">Themba</option>
			    <option value="saab">Andy</option>
			    <option value="fiat">Sbu</option>
			    <option value="audi">World</option>
			  </select></br><br>
            <label>Date </label><br>
            <input size="20" type="date"
            name="date" required></br></br>
            <lable>Phone No:  </label><br><input size="25" type="text"
            name="phone_no" required></br><br>
            <input class="buttons" type="submit" name="submit" value="Submit">
            <input class="buttons" type="reset" value="Cancel"></br><br>
        </div>
    </form>
	
	<?php include('bottom.php') ?>

	<?php include('tab.php') ?>
</body>
</html>