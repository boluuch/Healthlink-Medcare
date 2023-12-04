<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../../global.css" />
    <link rel="stylesheet" href="sign-up.css" />
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
    <div class="sign-up1">
      <div class="slab1" id="slabContainer">
        
        <b class="gateway-to-patient1">Gateway to Patient Care</b>
        <div class="license-number-wrapper">
          <div class="license-number">License number:</div>
        </div>
        <div class="location-wrapper">
          <div class="location">Location:</div>
        </div>
        <div class="name-wrapper">
          <div class="location">Name:</div>
        </div>
        <div class="email-wrapper">
          <div class="location">Email:</div>
        </div>
        <div class="phone-number-wrapper">
          <div class="license-number">Phone number:</div>
        </div>
        
        <div class="frame-parent">

          <div class="license-number">Password:</div>
        </div>
        <form action="signup.inc.php" method="post" id="myForm">
        <input class="slab-inner" placeholder="Name" name="name" type="text" />

        <input class="rectangle-input" placeholder="License" name="license_number" type="text" />

        <input class="slab-child1" placeholder="Location" name="location" type="text" />

        <input class="slab-child2" placeholder="Email" name="email" type="email" />

        <input class="slab-child3" placeholder="Phone Number" name="phone_number" type="tel" />

        <input class="slab-child4" placeholder="Password" name="password_hash" type="password" />
        <button class="sign-up-wrapper" id="frameButton" type="submit">
          <b class="sign-up2">Sign up</b>
        </button>
      </form>

        <a href="../customer authenticate/create-account.php"><div class="our-esteemed-customer1">Customer? Click Here</div></a>
        <a class="click-here1" href="login.php">Log in?</a>
      </div>

      <div class="frame4">
        <img class="frame-icon2" alt="" src="../frame.svg" />

        <img class="frame-icon3" alt="" src="../frame1.svg" />

        <div class="frame5">
          <div class="unlocking-health-solutions1">
            Unlocking Health Solutions
          </div>
        </div>
      </div>
    </div>

    

    <script>
      document.getElementById('myForm').addEventListener('submit', function(e) {
         // Perform client-side validation using JavaScript
         var Name = document.getElementsByName('Name')[0].value;
         var password_hash = document.getElementsByName('password_hash')[0].value;

         if (username === '' || password === '') {
            alert('Please fill in all fields.');
            e.preventDefault();  // Prevent form submission
         }
      });
    </script>
  </body>
</html>
