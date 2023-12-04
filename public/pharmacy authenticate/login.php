<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../global.css" />
    <link rel="stylesheet" href="login.css" />
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
    <div class="login-1">
      <div class="slab" id="slabContainer">
        <b class="gateway-to-patient">Gateway to Patient Care</b>
        <div class="email">Email:</div>
        <div class="password">Password:</div>
          <form action="login.inc.php" method="post">
                  <input class="slab-child" placeholder="Email" type="email" name="email"/>
                  <input class="slab-item" placeholder="Password" type="password" name="pwd"/>
                  <button class="log-in-wrapper" id="frameButton">
                    <b class="log-in">Log in</b>
                  </button>
          </form>
        <div class="our-esteemed-customer">Our Esteemed Customer?</div>
        <a class="click-here" href="../customer authenticate/log-in.php">Click Here</a>
      </div>
      <div class="frame1">
        <img class="frame-icon" alt="" src="../frame.svg" />

        <img class="frame-icon1" alt="" src="../frame1.svg" />

        <div class="frame2">
          <div class="unlocking-health-solutions">
            Unlocking Health Solutions
          </div>
        </div>
      </div>
    </div>

    <div id="logInContainer" class="popup-overlay" style="display: none">
      <div class="log-in2">
        <a><img
          class="paramedic-sign-icon20"
          alt=""
          src="../paramedicsign1.svg"
        /></a>



    <script>
      var popupframeButton = document.getElementById("popupframeButton");
      if (popupframeButton) {
        popupframeButton.addEventListener("click", function (e) {
          window.location.href = "../../home.php";
        });
      }
      
      var popupcreateAccount = document.getElementById("popupcreateAccount");
      if (popupcreateAccount) {
        popupcreateAccount.addEventListener("click", function (e) {
          window.location.href = "../../home.php";
        });
      }
      
      
      </script>
  </body>
</html>
