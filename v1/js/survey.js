let question_container = document.getElementById("question-container"),
  color_display = document.querySelectorAll(".color-display"),
  answers = [],
  arr = [],
  userDetails = {},
  mybool = false,
  runningQtn = -1,
  num = 0,
  checkbox = document.querySelector(".container-input"),
  user_form = `<div class="question-div" id="qtnbox">
						<p id="question" style="text-align: center;">Thank you for taking the time to answer our survey<br> May you kindly enter your name and email below so we can notify you of any new apps we wil be building in shopify</p>
						<div>
							<div class="form-group">
								<label for="user-name">Name</label>
								<input type="text" cols=30 rows=5 name="user-name" id="user-name" class="user-details form-control" placeholder="Vusi"><br>
							</div>
							<div class="form-group">
								<label for="user-email">Email</label>
								<input type="email" cols=30 rows=5 name="user-email" id="user-email" class="user-details form-control" placeholder="vusi@gmail.com"><br>
							</div>
						</div>
						<div class="form-group">
							<button class="submit-answer btn btn-lg text-uppercase rounded-pill" onclick="nextQtn()">Submit</button>
						</div>
					</div>`,
colorObj = {
  "#d8fff7": "#006b6b",
  "#fad8ff": "#6b0063",
  "#d8efff": "#002b6b",
  "#fff": "#1e1f31",
  "#ffe5e0": "#9e4738",
  "#1e1f31": "#ffffff",
};

// *********************************** INSERTING QUESTIONS ****************************************

color_display.forEach((element) => {
  element.querySelector("div").style.border =
    "2px solid " + colorObj[element.title];
  element.style.color = colorObj[element.title];
  element.style.backgroundColor = element.title;
});

try {
    checkbox.addEventListener("change", (e) => {
  if (e.target.checked) {
    console.log("Checkbox is checked..");
    document.querySelector("#myoptions").style.display = "grid";
  } else {
    console.log("Checkbox is not checked..");
    document.querySelector("#myoptions").style.display = "none";
  }
});
} catch(e) {}

function faka() {
  if (document.querySelector("#question").value.length === 0) {
    document.querySelector("#question").style.border = "2px solid red";
    return;
  }
  checkbox.style.display = "flex";
  document.querySelector(".main .container").style.cssText =
    "display: grid; place-items: center";
  document.getElementById("done-btn").style.display = "block";
  if (num > 0) {
    if (num < numberOfquestions) {
      var obj = {};
      obj["question"] = document.querySelector("#question").value;
      obj["options"] = document.querySelector("#mycheckbox").checked
        ? true
        : false;
      obj["answers"] = "";

      if (obj.options) {
        obj["optionA"] = document.querySelector("#optionA").value;
        obj["optionB"] = document.querySelector("#optionB").value;
        obj["optionC"] = document.querySelector("#optionC").value;
        obj["optionD"] = document.querySelector("#optionD").value;
      }

      arr.push(obj);

      if (obj.options) {
        document.querySelector("#optionA").value = "";
        document.querySelector("#optionB").value = "";
        document.querySelector("#optionC").value = "";
        document.querySelector("#optionD").value = "";
        document.querySelector("#mycheckbox").checked = false;
      }
    }
  } else {
    var obj = {};
    obj["question"] = document.querySelector("#question").value;
    obj["backgroundColor"] = document.querySelector("#mycolor").value;
    arr.push(obj);
  }
  num++;

  if (num < numberOfquestions) {
    document.querySelector(".main-two").innerHTML = `<div id="qtnbox">
                                                        <label>Question ${num} of ${numberOfquestions}</label><br>
                                                        <textarea name="love" id="question" class="form-control" cols="30" rows="2" class="question form-control" placeholder="Enter your question"></textarea><br>
                                                        <div id="myoptions" style="display: none;">
                                                            <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Option A" name="" id="optionA">
                                                            </div>
                                                            <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Option B" name="" id="optionB">
                                                            </div>
                                                            <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Option C" name="" id="optionC">
                                                            </div>
                                                            <div class="form-group">
                                                              <input type="text" class="form-control" placeholder="Option D" name="" id="optionD">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <button id="faka" onclick="faka()">Add Question</button>
                                                        </div>
                                                    </div>
                                                    <h1 id="error" style="color: rgb(188, 35, 35);"></h1>`;
  } else {
    document.querySelector(".main-two").innerHTML =
      '<h3 id="error" style="color: rgb(188, 35, 35);">You have reached your max</h3>';
  }
}

function addColor(e) {
  document.querySelector("#mycolor").value = e;

  let thecolor = document.querySelectorAll(".active-color-display");

  if (thecolor.length > 0) {
    thecolor.forEach((element) => {
      thecolor[0].classList.remove("active-color-display");
    });
  }

  document.querySelector("#color-option").addEventListener("click", (el) => {
    el.target.classList.add("active-color-display");
  });
}

function generateSurveyId() {
  let alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  let alphanum = alpha + "01234567890";
  let randomString = "";
  for (let i = 0; i < 2; i++) {
    randomString += alpha[Math.floor(Math.random() * alpha.length)];
  }
  for (let j = 0; j < 6; j++) {
    randomString += alphanum[Math.floor(Math.random() * alphanum.length)];
  }

  return randomString;
}

function submitSurvey() {
  checkbox.style.display = "none";
  document.getElementById("done-btn").style.display = "none";
  document.querySelector(".main-two").innerHTML = `<h2>Review Questions</h2>`;
  for (let i = 0; i < arr.length; i++) {
    if (i === 0) {
      document.querySelector(".main-two").innerHTML += `<div>
                        <h3>Survey name: ${arr[i].question}</h3>
                        </div><br>`;
    }
    if (i !== 0) {
      if (arr[i].options) {
        document.querySelector(".main-two").innerHTML += `<div>
                        <p>${i}. <u>${arr[i].question}</u></p>
                        <label>Options</label>
                        <p>${arr[i].optionA}  ${arr[i].optionB}  ${arr[i].optionC}  ${arr[i].optionD}</p>
                        </div><br>`;
      } else {
        document.querySelector(".main-two").innerHTML += `<div>
                        <p>${i}. <u>${arr[i].question}</u></p>
                        </div><br>`;
      }
    }
  }
  document.querySelector(
    ".main-two"
  ).innerHTML += `<div class="form-group"><button id="faka" onclick="finalSubmit()">Submit</button></div>`;
}

function finalSubmit() {
    console.log("Does this work!!!!!");
  // fetch("survey_upload.php?usedqtns=" + (numberOfquestions - num))
  //   .then((res) => res.json())
  //   .then((data) => console.log(data));

  let details_of_survey = JSON.stringify(arr.shift());
  let myJSON = JSON.stringify(arr);

  var die_questions = document.createElement("input");
  die_questions.type = "hidden";
  die_questions.name = "questions";
  die_questions.value = myJSON;

  var die_details = document.createElement("input");
  die_details.type = "hidden";
  die_details.name = "details";
  die_details.value = details_of_survey;

  var die_user = document.createElement("input");
  die_user.type = "hidden";
  die_user.name = "usedqtns";
  die_user.value = numberOfquestions - num;

  var formData = document.createElement("form");
  formData.method = "POST";
  formData.action = "survey_upload.php";
  formData.appendChild(die_questions);
  formData.appendChild(die_details);
  formData.appendChild(die_user);
  document.getElementById("myform").appendChild(formData);
  formData.submit();
}

// ****************************************** Actual Survey *******************************

function nextQtn() {
  if (runningQtn != -1 && runningQtn < questions.length) {
    var obj = {};
    obj["question"] = questions[runningQtn].question;
    obj["answer"] = document.getElementById("answer").value;
    answers.push(obj);
  }

  if (runningQtn == questions.length) {
    if (document.getElementById("user-name").value == 0) {
      document.getElementById("user-name").style.border = "2px solid red";
      return;
    }
    if (document.getElementById("user-email").value == 0) {
      document.getElementById("user-email").style.border = "2px solid red";
      return;
    }
    userDetails["name_user"] = document.getElementById("user-name").value;
    userDetails["email_user"] = document.getElementById("user-email").value;
    userDetails["link"] = code[0];
    userDetails["survey_name"] = code[1];
    userDetails["userid"] = code[2];
  }

  runningQtn++;
  if (runningQtn < questions.length) {
    question_container.innerHTML = `<div class="question-div" id="qtnbox">
                                            <p>Question ${runningQtn + 1}</p>
                                            <h4 id="question">${
                                              questions[runningQtn].question
                                            }</h4>
                                        </div>`;
    let question_div = document.querySelector(".question-div");
    if (questions[runningQtn].options == "1") {
      question_div.innerHTML += `<div id="options-div">
            <a href="javascript:void(0)" onclick="enterAnswer('${
              questions[runningQtn].optionA
            }')" class="options">${questions[runningQtn].optionA}</a>
            ${
              questions[runningQtn].optionB.length == 0
                ? ""
                : `<a href="javascript:void(0)" onclick="enterAnswer('${questions[runningQtn].optionB}')" class="options">${questions[runningQtn].optionB}</a>`
            }
            ${
              questions[runningQtn].optionC.length == 0
                ? ""
                : `<a href="javascript:void(0)" onclick="enterAnswer('${questions[runningQtn].optionC}')" class="options">${questions[runningQtn].optionC}</a>`
            }
            ${
              questions[runningQtn].optionD.length == 0
                ? ""
                : `<a href="javascript:void(0)" onclick="enterAnswer('${questions[runningQtn].optionD}')" class="options">${questions[runningQtn].optionD}</a>`
            }
        </div>
        <div class="form-group">
          <button class="submit-answer btn btn-lg text-uppercase rounded-pill" onclick="nextQtn()">Submit</button>
        </div>
        <input type="hidden" id="answer"><br>`;
    } else {
      question_div.innerHTML += `<div class="form-group"><textarea id="answer" class="form-control" cols="30" rows="2"></textarea></div><div class="form-group"><button class="submit-answer btn btn-lg text-uppercase rounded-pill" onclick="nextQtn()">Submit</button></div>`;
    }
    insertColors();
  } else if(runningQtn == questions.length) {
    question_container.innerHTML = user_form;
  } else {
    question_container.innerHTML =
      '<h3 id="error">Thank you for participating. </h3>';
    sendAnswers(answers, userDetails);
  }
}

function enterAnswer(e) {
  document.getElementById("answer").value = "";
  document.getElementById("answer").value = e;

  let thebtn = document.querySelectorAll(".active_div");

  if (thebtn.length > 0) {
    thebtn.forEach((element) => {
      thebtn[0].classList.remove("active_div");
    });
  }

  document.getElementById("options-div").addEventListener("click", (ev) => {
    ev.target.classList.add("active_div");
  });
}

function sendAnswers(arr, obj) {
  let details_of_user = JSON.stringify(obj);
  let myJSON = JSON.stringify(arr);

  var formData = new FormData();
  formData.append("user_details", details_of_user);
  formData.append("answers", myJSON);

  fetch("setanswers.php", {
    method: "post",
    body: formData,
  })
    .then((data) => {})
    .catch(console.error);
}
