let screen = document.querySelector(".screen"),
  score = document.getElementById("score"),
  clock = document.getElementById("time"),
  question_div = document.querySelector(".question"),
  sum_options_div = document.querySelector(".sum-options"),
  equations = [],
  select_sum = 0; // this is used to select the equation from the equations array
(countdown = 60),
  (bombArray = []),
  (speed = 30),
  (my_score = 0),
  (streak = 0),
  (longest_streak = 0),
  (lives = 3),
  (timer = null),
  (bombcreator = null);

let questions = [];

window.addEventListener("load", () => {
  getQuestions("maths");
});

function getQuestions(ev) {
  var url = "getmathbombs.php?category=" + ev;
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      data.forEach((element) => {
        let arr = element.options.split(",");
        element["points"] = parseInt(element.points);
        element["options"] = arr;
        equations.push(element);
      });
    });
}

function setQuestions() {
  for (let i = 0; i < questions.length; i++) {
    var temp = `getmathbombs.php?question=${questions[i].question}&options=${questions[i].options}&level=${questions[i].level}&answer=${questions[i].answer}&points=${questions[i].points}`;
    fetch(temp)
      .then((response) => response.json())
      .then((data) => console.log(data));
  }
}

function updateTime() {
  countdown--;
  clock.innerHTML = countdown;
  if (countdown <= 20 && countdown > 9) {
    clock.style.color = "orange";
  }
  if (countdown <= 9) {
    clock.style.color = "red";
  }
  if (countdown == 0) {
    clearInterval(timer);
    gameOver("Times Up");
  }
}

function createBombFunctions() {
  for (let i = 0; i < bombArray.length; i++) {
    bombArray[i].div.addEventListener("click", () => {
      question_div.innerHTML = "";
      sum_options_div.innerHTML = "";

      let activeBomb = document.querySelectorAll(".active_bomb");
      if (activeBomb.length > 0) {
        activeBomb.forEach((element) => {
          activeBomb[0].classList.remove("active_bomb");
        });
      }

      bombArray[i].div.classList.add("active_bomb");
      question_div.innerHTML = bombArray[i].question.question;
      bombArray[i].question.options.forEach((element) => {
        sum_options_div.innerHTML += `<button class="ans">${element}</button>`;
      });
      createButtonListeners(bombArray[i], i);
    });
  }
}

function createButtonListeners(ev, index) {
  document.querySelectorAll(".ans").forEach((element) => {
    element.addEventListener("click", () => {
      // ************ CHECK IF ANSWER IS CORRECT ****************
      if (parseInt(element.innerHTML) == ev.question.answer) {
        question_div.innerHTML = "";
        sum_options_div.innerHTML = "";
        bombArray.splice(index, 1);
        streak++;
        longest_streak = streak > longest_streak ? streak : longest_streak;
        my_score += ev.question.points;
        score.innerHTML = my_score;
        if (streak % 10 == 0) {
          countdown += 15;
        }
        if (streak % 6 == 0) {
          speed -= 10;
        }
        createBomb();
      } else {
        streak = 0;
        ev.pixels += 100;
        createBomb();
      }
    });
  });
}

function createBomb() {
  if (lives > 0) {
    screen.innerHTML = "";
    let bomb = document.createElement("div");
    bomb.setAttribute("class", "bomb");
    bomb.style.left =
      Math.floor(Math.random() * (screen.clientWidth - 45)) + "px";
    select_sum = Math.floor(Math.random() * equations.length);
    bombArray.push({ div: bomb, pixels: 0, question: equations[select_sum] });
    createBombFunctions();
    bombArray.forEach((element, index) => {
      screen.appendChild(element.div);
      element.pixels += screen.clientHeight / speed;
      element.div.style.transform = `translateY(${element.pixels}px)`;
      if (element.pixels >= screen.clientHeight - 35) {
        bombArray.splice(index, 1);
        speed += 10;
        lives--;
        screen.setAttribute("id", "bombdropped");
        setTimeout(() => {
          screen.setAttribute("id", "clearsky");
        }, 200);
      }
    });
  } else {
    clearInterval(timer);
    gameOver("Game over");
  }
}

function startGame() {
  document.querySelector(".startscreen").style.display = "none";
  createBomb();
  timer = setInterval(updateTime, 1000);
  bombcreator = setInterval(createBomb, 3000);
}

function gameOver(msg) {
  clearInterval(bombcreator);
  screen.innerHTML = "";
  document.querySelector(".startscreen").style.display = "grid";
  document.querySelector(".tools").style.display = 'none';
  document.querySelector(
    ".startscreen div"
  ).innerHTML = `<h1>${msg}<br>Your score is ${my_score}<br>Longest streak: ${longest_streak}</h1><br><p>Thank you playing Mathbomb, please subscribe below to be one of the first to recieve a notification when we drop the full game</p><br>
  <div class="form-group">
								<label for="user-name">Email</label>
								<input type="email" cols=30 rows=5 name="user-name" id="user-email" class="user-details form-control" placeholder="email"><br>
						
							<button class="btn btn-primary btn-lg text-uppercase rounded-pill" onclick="entersubscription()">Submit</button>
						</div>`;
}

function entersubscription() {
  var temp = `subscribe.php?email=${
    document.querySelector("#user-email").value
  }`;
  fetch(temp)
    .then((response) => response.json())
    .then((data) => {
        if (data == 200) {
        document.querySelector(
          ".form-group"
        ).innerHTML = `<h3 style="color: #fff;">Thank you for subscribing</h3>`;
      }
    });
}
