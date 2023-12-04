<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../global.css" />
    <link rel="stylesheet" href="create-account.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="create-account">
      <div class="slab2" id="slabContainer">
        <b class="create-account2">Create Account</b>
        <div class="full-name">Full name:</div>
        <div class="phone-number1">Phone number:</div>
        <div class="location1">Location:</div>
        <div class="already-have-an">Already have an account ?</div>
        <a class="log-in1" href="log-in.php" id="logIn">Log in</a>
        <div class="email2">Email:</div>
        <div class="password2">Password:</div>

        <form action="signup.inc.php" method="post">
        <input class="slab-child5" name="full_name" placeholder="Full Name" type="text" />

        <input class="slab-child6" name="pass_word" placeholder="Password" type="password" />

        <input class="slab-child7" name="phone_number" placeholder="Phone Number" type="tel" />

        <input class="slab-child8" name="email" placeholder="Email" type="email" />

        <input class="slab-child9" name="location" placeholder="where you are" type="text" />
        <button type="submit" class="create-account-wrapper" >
          <b class="create-account1">Create Account</b>
        </button>
        </form>

        <div class="pharmacist">Pharmacist?</div>
        <a class="click-here2" href="../pharmacy authenticate/sign-up.php">Click Here</a>
      </div>
      <div class="frame7">
        <img class="frame-icon4" alt="" src="../frame2.svg" />

        <img class="frame-icon5" alt="" src="../frame1.svg" />

        <div class="frame8">
          <div class="we-at-healthlink">
            We at HealthLink are always focused on assisting with your medical
            needs.
          </div>
        </div>
      </div>
    </div>

    <div id="logInContainer" class="popup-overlay" style="display: none">
      <div class="log-in2">
        <a href="../../index.php"><img
          class="paramedic-sign-icon20"
          alt=""
          src="../paramedicsign1.svg"
        /></a>


        <div class="we-at-healthlink1">
          We at HealthLink are always focused on assisting with your medical
          needs.
        </div>
      </div>
    </div>

    <script>
      var popupframeButton = document.getElementById("popupframeButton");
      if (popupframeButton) {
        popupframeButton.addEventListener("click", function (e) {
          window.location.href = "./homepage.html";
        });
      }
      
      var popupcreateAccount = document.getElementById("popupcreateAccount");
      if (popupcreateAccount) {
        popupcreateAccount.addEventListener("click", function (e) {
          window.location.href = "./create-account.html";
        });
      }
      
      var logIn = document.getElementById("logIn");
      if (logIn) {
        logIn.addEventListener("click", function (e) {
          window.location.href = "./log-in.html";
        });
      }
      
   
      
      </script>
  </body>
</html>
