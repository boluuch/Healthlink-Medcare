<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../global.css" />
    <link rel="stylesheet" href="log-in.css" />
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
    <div class="log-in2">
      <a href="../../index.php"><img
        class="paramedic-sign-icon20"
        alt=""
        src="../paramedicsign1.svg"
      /></a>

      <div class="slab3">
        <div class="rectangle-div"></div>
        <div class="pharmacist1">Pharmacist?</div>
        <a class="click-here3" href="../pharmacy authenticate/login.php">Click Here</a>
        <button class="log-in-container" id="popupframeButton">
          <b class="log-in3">Log in</b>
        </button>
        <b class="log-in4">Log in</b>
        <div class="dont-have-an">Don’t have an account ?</div>
        <a
          class="create-account3"
          href="create-account.php"
          id="popupcreateAccount"
          >Create account</a
        >
        <div class="email3">Email:</div>
        <div class="password3">Password:</div>
        <form action="login.inc.php" method="post">
        <input class="slab-child10" placeholder="Email" type="email" name="pwd" />

        <input
          class="slab-child11"
          name="pwd"
          placeholder="password"
          type="password"
        />
        </form>
      </div>
      <img
        class="hospital-reception-icon"
        alt=""
        src="../hospital-reception.svg"
      />

      <div class="we-at-healthlink1">
        We at HealthLink are always focused on assisting with your medical
        needs.
      </div>
    </div>

    <script>
      var popupframeButton = document.getElementById("popupframeButton");
      if (popupframeButton) {
        popupframeButton.addEventListener("click", function (e) {
          window.location.href = "../../location.php";
        });
      }
      
      var popupcreateAccount = document.getElementById("popupcreateAccount");
      if (popupcreateAccount) {
        popupcreateAccount.addEventListener("click", function (e) {
          window.location.href = "./create-account.html";
        });
      }
      </script>
  </body>
</html>
