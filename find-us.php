<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="find-us.css" />
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
    <div class="find-us2">
      <div class="logo-header4">
        <div class="logo6">
          <a href="index.php"><img
            class="paramedic-sign-icon6"
            alt=""
            src="./public/paramedicsign.svg"
          /></a>

          <div class="healthlink-medical-center-container6">
            <span class="healthlink-medical6">HealthLink Medical</span>
          
          </div>
        </div>
      </div>
      <div class="navigation-header2">
        <a class="home5" href="index.php" id="home">Home</a>
        <a class="services2" href="preloader-services.php" id="services">Services</a>
        <a class="our-team2" href="preloader-our-team.php" id="ourTeam">Our Team</a>
        <a class="blog2" href="preloader-blog.php" id="blog">Blog</a>
        <a
          class="patient-resources2"
          href="preloader-patient-resources.php"
          id="patientResources"
          >Patient Resources</a
        >
        <a
          class="customer-support2"
          href="preloader-customer-support.php"
          id="customerSupport"
          >Customer support</a
        >
        <a class="testimonials5" href="preloader-testimonials.php" id="testimonials"
          >Testimonials</a
        >
        <a class="find-us3" href="preloader-find-us.php"><span class="underline"></span>Find us</a>
        <a class="about-us7" href="preloader-about-us.php" id="aboutUs">About us</a>
        <div class="underbar2"></div>
      </div>
      <div class="frequently-asked-questions">
        <div class="home-find-us">Home &gt;&gt;Find us</div>
        <b class="locate-healthcare-centers">Locate Healthcare Centers</b>
        <img class="picture-icon1" alt="" src="./public/picture1@2x.png" />
      </div>
      <div class="footer2">
        <div class="footer-inner"></div>
        <div class="logo7">
          <img
            class="paramedic-sign-icon6"
            alt=""
            src="./public/paramedicsign.svg"
          />

          <div class="healthlink-medical-center-container6">
            <span class="healthlink-medical6">HealthLink Medical</span>
            
          </div>
          <div class="ilishan-remo2">ILISHAN - REMO, Ogun State</div>
        </div>
        <div class="about-us8">
          <b class="about-us9">About us</b>
          <div class="about-healthlink2" id="aboutHealthLinkText">
            About HealthLink
          </div>
          <div class="news-media2" id="newsMedia">News & Media</div>
        </div>
        <div class="quick-links4">
          <b class="quick-links5">Quick Links</b>
          <div class="ecare2" id="ecareText">Ecare</div>
          <div class="book-an-appointment2" id="bookAnAppointment">
            Book an appointment
          </div>
        </div>
        <div class="contact-us4">
          <b class="contact-us5">Contact us</b>
          <div class="div14">0903 278 9805</div>
          <div class="div15">0703 312 6462</div>
          <div class="div16">0813 869 7269</div>
          <div class="div17">0812 814 7306</div>
          <div class="div18">0810 708 7981</div>
          <div class="div19">0811 862 7387</div>
          <div class="div20">0907 691 2476</div>
        </div>
        <div class="socials2">
          <div class="follow-us2">Follow us:</div>
          <a class="facebook2" target="_blank">
            <img class="vector-icon41" alt="" src="./public/vector5.svg" />
          </a>
          <a class="linkedin2" target="_blank">
            <img class="vector-icon42" alt="" src="./public/vector6.svg" />

            <img class="vector-icon43" alt="" src="./public/vector7.svg" />

            <img class="vector-icon44" alt="" src="./public/vector8.svg" />

            <img class="vector-icon45" alt="" src="./public/vector9.svg" />

            <img class="vector-icon46" alt="" src="./public/vector10.svg" />
          </a>
          <a class="youtube2" target="_blank">
            <img class="vector-icon47" alt="" src="./public/vector11.svg" />

            <img class="vector-icon48" alt="" src="./public/vector12.svg" />
          </a>
          <a class="twitter2" target="_blank">
            <img class="vector-icon49" alt="" src="./public/vector13.svg" />

            <img class="vector-icon50" alt="" src="./public/vector14.svg" />

            <img class="vector-icon51" alt="" src="./public/vector15.svg" />
          </a>
          <a class="instagram2" target="_blank">
            <img class="vector-icon52" alt="" src="./public/vector16.svg" />

            <img class="vector-icon53" alt="" src="./public/vector17.svg" />

            <img class="vector-icon54" alt="" src="./public/vector18.svg" />
          </a>
        </div>
      </div>
      <div class="map-contact-feature">
        <img class="contact-icon" alt="" src="./public/contact@2x.png" />

        <div class="picture2">
          <div class="reach-out-to">Reach out to stores</div>
          <div class="confirm-drug-availability-container">
            <ul class="confirm-drug-availability-requ">
              <li class="confirm-drug-availability">
                Confirm Drug Availability
              </li>
              <li class="confirm-drug-availability">
                Request pieces of medication
                <span class="doctors-prescription-only"
                  >(Doctor’s prescription only)</span
                >.
              </li>
              <li>
                Contact Registered Pharmaceutical stores available in your
                vicinity.
              </li>
            </ul>
          </div>
          <button onclick="redirect()" class="verify-btn" id="verifyBtn"><div class="sign-up3">Sign up</div></button>
          <div class="map">
            <img
              class="rectangle-icon"
              alt=""
              src="./public/rectangle@2x.png"
            />
          </div>
        </div>
      </div>
    </div>

    <script>
      function redirect() {
        // Redirect to the PHP page using JavaScript
        window.location.href = './public/customer authenticate/create-account.php';
    }
      var home = document.getElementById("home");
      if (home) {
        home.addEventListener("click", function (e) {
          window.location.href = "./homepage.html";
        });
      }
      
      var services = document.getElementById("services");
      if (services) {
        services.addEventListener("click", function (e) {
          window.location.href = "./services.html";
        });
      }
      
      var ourTeam = document.getElementById("ourTeam");
      if (ourTeam) {
        ourTeam.addEventListener("click", function (e) {
          window.location.href = "./our-team.html";
        });
      }
      
      var blog = document.getElementById("blog");
      if (blog) {
        blog.addEventListener("click", function (e) {
          window.location.href = "./blog.html";
        });
      }
      
      var patientResources = document.getElementById("patientResources");
      if (patientResources) {
        patientResources.addEventListener("click", function (e) {
          window.location.href = "./patient-resources.html";
        });
      }
      
      var customerSupport = document.getElementById("customerSupport");
      if (customerSupport) {
        customerSupport.addEventListener("click", function (e) {
          window.location.href = "./customer-support.html";
        });
      }
      
      var testimonials = document.getElementById("testimonials");
      if (testimonials) {
        testimonials.addEventListener("click", function (e) {
          window.location.href = "./testimonials.html";
        });
      }
      
      var aboutUs = document.getElementById("aboutUs");
      if (aboutUs) {
        aboutUs.addEventListener("click", function (e) {
          window.location.href = "./about-us.html";
        });
      }
      
      var aboutHealthLinkText = document.getElementById("aboutHealthLinkText");
      if (aboutHealthLinkText) {
        aboutHealthLinkText.addEventListener("click", function (e) {
          window.location.href = "./about-us.html";
        });
      }
      
      var newsMedia = document.getElementById("newsMedia");
      if (newsMedia) {
        newsMedia.addEventListener("click", function (e) {
          window.location.href = "./blog.html";
        });
      }
      
      var ecareText = document.getElementById("ecareText");
      if (ecareText) {
        ecareText.addEventListener("click", function (e) {
          window.location.href = "./services.html";
        });
      }
      
      var bookAnAppointment = document.getElementById("bookAnAppointment");
      if (bookAnAppointment) {
        bookAnAppointment.addEventListener("click", function (e) {
          window.location.href = "./services.html";
        });
      }
      </script>
  </body>
</html>
