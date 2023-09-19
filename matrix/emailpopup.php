<div class="outter-wrapper" id="popup">
        <div class="wrapper">
        <h2>Enter subject and email</h2><br>
            <h4 id="msgsent" style="display: none;"></h4><br>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control" id="form-subject" placeholder="Subject of email" required>
            </div>  
            <div class="form-group">
                <label>From</label>
                <input type="text" name="email" class="form-control" id="form-from-email" placeholder="name@example.com" required>
            </div>    
            <div class="form-group">
                <label>Add emails to send to</label>
                <input type="text" name="email" class="form-control" id="form-to-email" placeholder="name@example.com" required>
                <button onclick="AddEmail()">Add Emails</button>
            </div> <br>
            <div class="form-group cc_emails">
                <ul>
                </ul>
            </div><br> 
            <br> 
            <div class="form-group">
                <input type="submit" class="popupbtn" onclick="PrintHTML()" value="Send Email">
            </div>
      
        </div>
    </div>
    <script>
        var email_array = [];

        function AddEmail() {
            if(email_array.length >= 5) {
                document.querySelector("#msgsent").innerHTML = `You can only send to 5 emails <br><a href="../../info.php">Get in touch <i class="fas fa-envelope"></i></a>`;
                document.querySelector("#msgsent").style.cssText = "color: red; display: block;";
                return;
            }
            if(document.querySelector("#form-to-email").value == '') {
                document.querySelector("#form-to-email").style.border = "1px solid red";
                return;
            }
            email_array.push(document.querySelector("#form-to-email").value);
            document.querySelector(".cc_emails ul").innerHTML = '';
            email_array.forEach((element, index) => {
                document.querySelector(".cc_emails ul").innerHTML += `<li onclick=removeEmail(${index})>${element}</li>`
            });
            document.querySelector("#form-to-email").value = '';
        }

        function removeEmail(e) {
            email_array.splice(e, 1);
            document.querySelector(".cc_emails ul").innerHTML = '';
            email_array.forEach((element, index) => {
                document.querySelector(".cc_emails ul").innerHTML += `<li onclick=removeEmail(${index})>${element}</li>`
            });
        }
    </script>