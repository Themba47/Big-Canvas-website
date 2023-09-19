const header = document.querySelector("header");
const sectionOne = document.querySelector(".section");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      document.getElementById("header").style.backgroundImage = "linear-gradient(#3a4aff91, #3a4aff91, #3a4aff91, #3a4aff91, transparent";
    } else {
      document.getElementById("header").style.background = "transparent";
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);



//function for changing pages when clicked
const clippersLa = document.getElementById('lakers');
const tickBox = document.getElementById("tickbox");
const wBegin = document.getElementById("will-begin");
const qOne = document.getElementById("thequiz");
const ctdown = document.getElementById("count60down");
const question = document.getElementById("question");
const quiz = document.getElementById("question-1");
const qtnbtn = document.getElementById("qtnbtns");
const idQtn = document.getElementById("id-qtn");
const ans = document.getElementById("answers");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const choiceD = document.getElementById("D");
const scoreDiv = document.getElementById("score");
const finalSc = document.getElementById("finalscore");
const dieScore = document.getElementById("currentscore");
const theTab = document.getElementById("theTab");
const starDiv = document.getElementById("theright");
const whatsLink = "<div class='da-link' id='whatsapp-link'><a href='whatsapp://send?text=https://bit.ly/3a7IK4H' data-action='share/whatsapp/share'>Invite your friends via Whatsapp</a></div>";
let theAnswers = {}
,userDetails = {}
,score = 0
,TIMER
,lastQuestion = questions.length - 1
,runningQuestion = 0;
wBegin.style.display = "none";


  async function getQuestions(ev) {
    var url = 'getquestions.php?level='+ev
    await fetch(url)
    .then(response => response.json())
    .then(data => {
      questions = data;
      lastQuestion = questions.length -1;
    });
  }



  function isikhati() {
  var dieSeconds = 45;
  function tick() {
    if(runningQuestion >= lastQuestion){
      dieSeconds == dieSeconds;
  } else {
    dieSeconds--;
  }
    ctdown.innerHTML = dieSeconds;
    if (dieSeconds > 0) {
      var skati = setTimeout(tick, 1000);
    } else {
      alert("Time is Up");
      quiz.style.display = "none";
      scoreRender();
    }
    if (dieSeconds <= 10) {
      ctdown.style.color = "red";
    } else {
      ctdown.style.color = "#eb8d00";
    }
  }
  tick();
}






function renderQuestion() {
  let q = questions[runningQuestion];

  
  //quiz.style.animation = "slideqtn ease-out .5s 1 forwards 0.5s"

  idQtn.innerHTML = "<p><strong> Question " + (runningQuestion+1) +  "</strong></p>";
  if (q.image.length != 0) {
    stombe.innerHTML = "<img width=25% src='uploads/"+ q.image +"'  >";
    console.log(q.image);
  } else {
    stombe.innerHTML = "";
  }
  question.innerHTML = "<p>" + q.question + "</p>";
  choiceA.innerHTML = q.ChoiceA;
  choiceB.innerHTML = q.ChoiceB;
  choiceC.innerHTML = q.ChoiceC;
  choiceD.innerHTML = q.ChoiceD;
  try {
    document.querySelectorAll(".qtnbutns").forEach(ev => {
      ev.style.backgroundColor = "white";
    })
    document.querySelectorAll(".qtnbutns")[runningQuestion].style.backgroundColor = "red";
  } catch {}

}

var d = new Date();
dString = d.getFullYear() + "-" +d.getMonth()+ "-" +d.getDate();

// if(localStorage.getItem("mydate") != dString) {
//   localStorage.removeItem("mylives");
//   console.log("my lives");
// }

if(localStorage.getItem("mylives") < 3 && localStorage.getItem("mydate") != dString) {
  console.log("new lives");
}

wBegin.addEventListener("click",startQuiz);

function storeDetails() {
  document.getElementById("user-details").style.display = "none";
  let arr = document.querySelectorAll(".user-details-inputs");
  for (let i = 0; i < arr.length; i++) {
    userDetails[i] = arr[i].value;
    console.log(userDetails[i]);
  }
  console.log(userDetails);
  console.log(arr);
  wBegin.style.display = "block";
}



// start quiz
function startQuiz(){
    wBegin.style.display = "none";
    for(let j = 0; j < questions.length; j++) {
      qtnbtn.innerHTML += `<button class="qtnbutns" onclick="gotoQuestion(${j})">${j}</button> `;
    }
    // TIMER = isikhati();
    renderQuestion();
    qOne.scrollIntoView();
    document.getElementById("page-blog").style.height = "30vh";
    document.getElementById("masego").style.display = "none";
    quiz.style.display = "block";
}

renderQuestion();


function gotoQuestion(num) {
  runningQuestion = num;
  renderQuestion();
}

function checkAnswer(answer) {
  var wronglit = '<img id="wrong" width="45" src="img/wrong.png">';
  var starlit = '<img id="star" src="img/star.svg">';
  theAnswers[questions[runningQuestion].question] = answer;
  if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        quiz.style.display = "none";
        scoreRender();
       
    }
}


function scoreRender() {
  var url = 'submitsurvey.php?link='+questions[0].link+'&answers='+JSON.stringify(theAnswers)+'&user='+JSON.stringify(userDetails);
    fetch(url)
    .then(response => response.json())
    .then(data => {
      console.log(data);
      if(data == 200) {
        scoreDiv.innerHTML += "ALL IS WELL!!!!!!!";
        finalSc.style.backgroundImage = "linear-gradient(white, white, white, #008000a1, green)";
      }
    });
}
