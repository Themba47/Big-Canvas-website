const header = document.querySelector("header");
const sectionOne = document.querySelector(".section");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px",
};

const sectionOneObserver = new IntersectionObserver(function (
  entries,
  sectionOneObserver
) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      document.getElementById("header").style.backgroundImage =
        "linear-gradient(#1e1f31, #1e1f31, #1e1f31, #1e1f31, transparent";
    } else {
      document.getElementById("header").style.background = "transparent";
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

let questions = [];

//function for changing pages when clicked
const clippersLa = document.getElementById("lakers");
const tickBox = document.getElementById("tickbox");
const wBegin = document.getElementById("will-begin");
const qOne = document.getElementById("thequiz");
const ctdown = document.getElementById("count60down");
const hearts = document.getElementById("hearts");
const question = document.getElementById("question");
const quiz = document.getElementById("question-1");
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
let comment = `<div id="leavemsg_div">
<small style="width: 70%; margin: 2%;">Looking to create your own survey or quiz <a href='/survey-purchase'>Click here</a><br><br>If you love testing your general knowledge, you can subscribe below to recieve notifications when we drop a new general knowledge game with a different topic, global cities, animals, history, sport and more and also leave us a message below, your feedback is welcome. </small>
<input type="email" name="leavemsg_name" id="leavemsg_name" placeholder="email"><br>
<textarea maxlength="3000" name="leavemsg" id="leavemsg" cols="30" rows="4" placeholder="message"></textarea><br>
<button onclick="submitComment()">Submit</button>
</div>`;
const whatsLink =
  "<div class='da-link' id='whatsapp-link'><a href='whatsapp://send?text=https://bit.ly/3a7IK4H' data-action='share/whatsapp/share'>Invite your friends via Whatsapp</a></div>";
let score = 0;
let TIMER;
let lastQuestion = 0;
let runningQuestion = 0;

window.addEventListener("load", () => {
  var mylvl = localStorage.getItem("mylevel");
  checkLives();
  for (var k = 0; k <= localStorage.getItem("mylives") - 1; k++) {
    hearts.innerHTML += '<img class="my-hearts" src="img/heart-solid.svg">';
  }
  if (mylvl) {
    getQuestions(localStorage.getItem("mylevel"));
    userLevel.innerHTML = `<label style="color: #fff;">Level ${localStorage.getItem("mylevel")}</label>`;
  } else {
    getQuestions(1);
    userLevel.innerHTML = `<label style="color: #fff;">Level 1</label>`;
  }
});

function checkLives() {
  if (localStorage.getItem("mydate") != dString) {
    localStorage.setItem("mylives", 3);
    localStorage.setItem("mydate", dString);
  } else {
    
  }
}

async function submitComment() {
  var the_comment = document.getElementById("leavemsg").value;
  var the_name = document.getElementById("leavemsg_name").value;
  var newNode = document.createElement("p");
  var textNode = document.createTextNode("please fill in comment");
  newNode.appendChild(textNode);
  var url = `submitcomment.php?comment=${the_comment}&name=${the_name}`;
  if (the_comment.length === 0) {
    document
      .getElementById("leavemsg_div")
      .insertBefore(
        newNode,
        document.getElementById("leavemsg_div").children[0]
      );
    document.getElementById("leavemsg").focus();
  } else {
    await fetch(url)
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if (data == 200) {
          document.getElementById("leavemsg_div").innerHTML =
            "<h4>Thank you for your input<br> Looking to create your own survey or quiz <a href='/survey-purchase'>Click here</a></h4>";
        }
      });
  }
}

function setQuestions() {
  for (let i = 0; i < questions.length; i++) {
    var temp = `getquestions.php?question=${questions[i].question}&choiceA=${questions[i].choiceA}&choiceB=${questions[i].choiceB}&choiceC=${questions[i].choiceC}&choiceD=${questions[i].choiceD}&correct=${questions[i].correct}`;
    var url = "getquestions.php?level=" + ev;
    fetch(temp)
      .then((response) => response.json())
      .then((data) => console.log(data));
  }
}

async function getQuestions(ev) {
  var url = "getquestions.php?level=" + ev;
  await fetch(url)
    .then((response) => response.json())
    .then((data) => {
      questions = data;
      lastQuestion = questions.length - 1;
      beginGame();
    });
}

function isikhati() {
  var dieSeconds = 75;
  function tick() {
    if (runningQuestion >= lastQuestion) {
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
  setTimeout(() => {
    document.querySelector("body").style.animation = "none";
  }, 1500);
  if (q.image.length != 0) {
    stombe.innerHTML = "<img width=25% src='" + q.image + "'>";
    console.log(q.image);
  } else {
    stombe.innerHTML = "";
  }
  idQtn.innerHTML =
    "<p><strong> Question " + (runningQuestion + 1) + "</strong></p>";
  question.innerHTML = "<p>" + q.question + "</p>";
  choiceA.innerHTML = q.ChoiceA;
  choiceB.innerHTML = q.ChoiceB;
  choiceC.innerHTML = q.ChoiceC;
  choiceD.innerHTML = q.ChoiceD;
}

var d = new Date();
dString = d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate();

// if(localStorage.getItem("mydate") != dString) {
//   localStorage.removeItem("mylives");
//   console.log("my lives");
// }

// if(localStorage.getItem("mylives") < 3 && localStorage.getItem("mydate") != dString) {
//   console.log("new lives");
// }

function beginGame() {
  if (localStorage.getItem("mylives") == 0) {
    wBegin.innerHTML = "You out of lives, you can play again tomorrow";
    wBegin.style.backgroundColor = "red";
    masego.remove();
  } else {
    if (questions.length == 0) {
      wBegin.innerHTML =
        "<img src='img/smile.svg' width='50%'> Congratulations you win!!! <br>" +
        comment;
      masego.remove();
    } else {
      wBegin.addEventListener("click", startQuiz);
    }
  }
}

// start quiz
function startQuiz() {
  wBegin.style.display = "none";
  TIMER = isikhati();
  renderQuestion();
  qOne.scrollIntoView();
  document.getElementById("page-blog").style.height = "30vh";
  document.getElementById("masego").style.display = "none";
  quiz.style.display = "block";
}

renderQuestion();

function checkAnswer(answer) {
  var wronglit = '<img id="wrong" width="45" src="img/wrong.png">';
  var starlit = '<img id="star" src="img/star.svg">';
  if (answer == questions[runningQuestion].correct) {
    //answer is correct
    score++;
    crrntScore = Math.round((100 * score) / questions.length);
    dieScore.innerHTML = "Score: " + crrntScore;
    starDiv.innerHTML = starlit;
    document.querySelector("body").style.animation = "correct-answer-color 3s ease-out forwards";
  } else {
    starDiv.innerHTML = wronglit;
    document.querySelector("body").style.animation = "wrong-answer-color 3s ease-out forwards";
  }
  if (runningQuestion < lastQuestion) {
    runningQuestion++;
    renderQuestion();
  } else {
    // end the quiz and show the score
    quiz.style.display = "none";
    scoreRender();
  }
}

function scoreRender() {
  const scorePerCent = Math.round((100 * score) / questions.length);
  const nxtLevel = "<a href='#'>Next Level</a>";
  if (scorePerCent >= 50) {
    var increaselvl = localStorage.getItem("mylevel");
    if (!increaselvl || increaselvl == "undefined") {
      increaselvl = 2;
    } else {
      increaselvl++;
    }
    localStorage.setItem("mylevel", increaselvl);
    scoreDiv.innerHTML +=
      "<img src='img/smile.svg' width='50%'><br><p class='scoreTxt'> Your score " +
      scorePerCent +
      " <br><br><a href=''>Next Level</a></p>" +
      comment +
      "<br>" +
      whatsLink +
      "";
    finalSc.style.backgroundImage =
      "linear-gradient(white, white, white, #008000a1, green)";
  } else {
    scoreDiv.innerHTML +=
      "<img src='img/lonely.svg' width='50%'><br><p class='scoreTxt'> Your score is " +
      scorePerCent +
      ". You need 50 to proceed to the next level <br><br><a href=''>Restart</a></p>" +
      comment +
      "<br>" +
      whatsLink +
      "";
    finalSc.style.backgroundImage =
      "linear-gradient(white, white, white, #ff00008c, red)";
    var mylives = localStorage.getItem("mylives");
    if (!mylives || mylives == "undefined" || mylives >= 3) {
      localStorage.setItem("mylives", 2);
      console.log("2 lives left");
    }
    if (mylives == 2) {
      localStorage.setItem("mylives", 1);
      console.log("1 life left");
    }
    if (mylives == 1) {
      localStorage.setItem("mylives", 0);
      localStorage.setItem(
        "mydate",
        d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate()
      );
    }
  }
}
