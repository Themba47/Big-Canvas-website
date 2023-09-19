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
	<meta name="description" content="How well do you know South Africa. play the quiz to find out.| Johannesburg">
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
					<div class="content-blog">
						<h2 id="masego">How much do you know about your country, South Africa?</h2>
						<h1 id="will-begin">Start Quiz</h1><br><br>
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
						<h3 id="score"></h3>
					</div>					

				</div>
			</div>


		</div>
	</div>

  <div id="theright"></div>
  <div style="display: none;" id="nxtlvl"><p>Congratulations you a genius, you have completed the quiz.</p></div>
  <div style="display: none;" id="rstart">levelthree.php</div>
  
  
	<?php include('bottom.php') ?>

	<?php include('tabquiz.php') ?>

<script>
	
	let questions = [
  {
    id: "Question 1 out of 20",
    img: "quizimg/youngrama.jpg",
    question: "Which union did Cyril Ramaphosa help to create in 1982?",
    choiceA: "National Union of Metalworkers of South Africa",
    choiceB: "National Education, Health and Allied Workers' Union",
    choiceC: "National Union of Mineworkers",
    choiceD: "South African Medical Association",
    correct: "C"
  },
  {
    id: "Question 2 out of 20",
    img: "quizimg/kuruman.jpg",
    question: "In which province will you find the town Kuruman?",
    choiceA: "North West",
    choiceB: "Western Cape",
    choiceC: "Eastern Cape",
    choiceD: "Northern Cape",
    correct: "D"
  },
  {
    id: "Question 3 out of 20",
    img: "quizimg/chad.jpg",
    question: "who is he?",
    choiceA: "Michael Phelps",
    choiceB: "Chad le Clos",
    choiceC: "Cameron van der Burgh",
    choiceD: "Ronald Schoeman",
    correct: "B"
  },
  {
    id: "Question 4 out of 20",
    img: "quizimg/thuli.jpg",
    question: "Who is she?",
    choiceA: "Baleka Mbete",
    choiceB: "Lindiwe Sisulu",
    choiceC: "Busisiwe Mkhwebane",
    choiceD: "Thuli Mandonsela",
    correct: "D"
  },
  {
    id: "Question 5 out of 20",
    img: "",
    question: "Who was the interim president after Thabo Mbeki resigned in 2008?",
    choiceA: "Kgalema Motlanthe",
    choiceB: "Baleka Mbete",
    choiceC: "Jacob Zuma",
    choiceD: "Cyril Ramaphosa",
    correct: "A"
  },
  {
    id: "Question 6 out of 20",
    img: "",
    question: "In what year was the national womans march to the Union Buildings?",
    choiceA: "1976",
    choiceB: "1956",
    choiceC: "1960",
    choiceD: "1990",
    correct: "B"
  },
  {
    id: "Question 7 out of 20",
    img: "",
    question: "Who is the current president of the ANC womens league?",
    choiceA: "Nomvula Mokonyane",
    choiceB: "Bathabile Dlamini",
    choiceC: "Nkosazana Dlamini-Zuma",
    choiceD: "Baleka Mbete",
    correct: "B"
  },
  {
    id: "Question 8 out of 20",
    img: "",
    question: "Who was the first woman elected to the executive commitee of the ANC?",
    choiceA: "Winnie Mandela",
    choiceB: "Albertina Sisulu",
    choiceC: "Helen Joseph",
    choiceD: "Lillian Ngoyi",
    correct: "D"
  },
  {
    id: "Question 9 out of 20",
    img: "",
    question: "Who is the deputy president of the EFF?",
    choiceA: "Floyd Shivambu",
    choiceB: "Mbuyiseni Ndlozi",
    choiceC: "Dali Mpofu",
    choiceD: "Godrich Gardee",
    correct: "A"
  },
  {
    id: "Question 10 out of 20",
    img: "",
    question: "What is the name of the armed wing of the ANC?",
    choiceA: "COSATU",
    choiceB: "South African Defence Force",
    choiceC: "uMkhonto we Sizwe",
    choiceD: "SACP",
    correct: "C"
  },
  {
    id: "Question 11 out of 20",
    img: "",
    question: "Who was the last white president of South Africa?",
    choiceA: "Jan Smuts",
    choiceB: "Cecil John Rhodes",
    choiceC: "Hendrik Verwoerd",
    choiceD: "FW de Klerk",
    correct: "D"
  },
  {
    id: "Question 12 out of 20",
    img: "",
    question: "In which province will you find the town of Secunda?",
    choiceA: "Limpopo",
    choiceB: "Mpumalanga",
    choiceC: "Gauteng",
    choiceD: "Free State",
    correct: "B"
  },
  {
    id: "Question 13 out of 20",
    img: "",
    question: "What is the largest river in South Africa?",
    choiceA: "Crocodile river",
    choiceB: "Vaal river",
    choiceC: "Tugela river",
    choiceD: "Orange river",
    correct: "D"
  },
  {
    id: "Question 14 out of 20",
    img: "",
    question: "In which town will you find the Cango Caves?",
    choiceA: "Oudtshoorn",
    choiceB: "Mossel Bay",
    choiceC: "Hermanus",
    choiceD: "Paarl",
    correct: "A"
  },
  {
    id: "Question 15 out of 20",
    img: "quizimg/twooceans.jpg",
    question: "Where does the two oceans (Indian and Atlantic ocean) meet?",
    choiceA: "Cape Agulhas",
    choiceB: "Hermanus",
    choiceC: "Cape of good hope",
    choiceD: "Mossel Bay",
    correct: "A"
  },
  {
    id: "Question 16 out of 20",
    img: "",
    question: "What is the name of the famous afro-pop singer who released songs like pata-pata and the click song?",
    choiceA: "Thandiswa Mazwai",
    choiceB: "Lira",
    choiceC: "Brenda Fassie",
    choiceD: "Miriam Makeba",
    correct: "D"
  },
  {
    id: "Question 17 out of 20",
    img: "",
    question: "What was the name of the mass movement conducted by university students in 2016 and 2017 in South Africa?",
    choiceA: "StagnationMustFall",
    choiceB: "FeesMustFall",
    choiceC: "DataMustFall",
    choiceD: "ZumaMustFall",
    correct: "B"
  },
  {
    id: "Question 18 out of 20",
    img: "quizimg/coatoa.png",
    question: "what language is the motto written in on the South African coat of arms?",
    choiceA: "Xhosa",
    choiceB: "Setswana",
    choiceC: "Khoisan",
    choiceD: "Afrikaans",
    correct: "C"
  },
  {
    id: "Question 19 out of 20",
    img: "",
    question: "In which year was the Natives land act passed?",
    choiceA: "1913",
    choiceB: "1920",
    choiceC: "1975",
    choiceD: "1975",
    correct: "A"
  },
  {
    id: "Question 20 out of 20",
    img: "",
    question: "Who is the current minister of health?",
    choiceA: "Aaron Motsoaledi",
    choiceB: "Zweli Mkhize",
    choiceC: "Lindiwe Sisulu",
    choiceD: "Naledi Pandor",
    correct: "B"
  },
];

</script>
<script src="js/mainthree.js"></script>
</body>
</html>