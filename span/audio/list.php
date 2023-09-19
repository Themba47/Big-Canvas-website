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


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2085627779889164"
     crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio book</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelist.css">
</head>
<body onload="dieMotto()">
	<?php include('head.php'); ?>

    <section class="section" id="welcome-to-list">
        <div class="love">
          <div class="content">
            <h2>Welcome to Audio Boeke</h2><br>
            <p>This site was built for you, the individual on the go, the peron building their future but just doesn't have the time to sit down and read, this is for you.</p>
          </div>
        </div>
    </section>

    <div id="theList"></div>

    <?php include('bottom.php') ?>
    <?php include('tablist.php') ?>

    <script>
    	
    	var theList = document.getElementById('theList');
      var theMotto = document.getElementById('theMotto');

      function dieMotto() {
        theMotto.style.height = '50%';
      }

      function closeMotto() {
        theMotto.style.display = 'none';
      }

  		fanlov = new XMLHttpRequest();
  		fanlov.open("GET", 'exbooks.json', true);
  		fanlov.onload = () => {
		var sunTzu = JSON.parse(fanlov.response);
		var tzu = sunTzu.thebooks;

		daList = '';
		for(i = 0; i < tzu.length; i++) {
			daList +=  '<div class="stock-books"><a class="cnn" href="'+ tzu[i].link +'" onclick=""><img src="'+ tzu[i].image + '" width="100%"><h2>' + tzu[i].name + '</h2><p>' + tzu[i].author + '</p><p id="booksection">' + tzu[i].section + '</p></a></div>';
    }
    theList.innerHTML = daList;
};
fanlov.send();


    </script>

</body>
</html>