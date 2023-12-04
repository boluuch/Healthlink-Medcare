<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="our-team.css" />
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
    <div class="our-team7">
      <div class="logo-header9">
        <div class="logo16">
          <a href="index.php"><img
            class="paramedic-sign-icon"
            alt=""
            src="./public/paramedicsign.svg"
          /></a>

          <div class="healthlink-medical-center-container16">
            <span class="healthlink-medical16">HealthLink Medical</span>
           
          </div>
        </div>
      </div>
      <div class="navigation-header7">
        <a class="home10" href="index.php" id="home">Home</a>
        <a class="services7" href="preloader-services.php" id="services">Services</a>
        <a class="our-team8" href="preloader-our-team.php"><span class="underline"></span>Our Team</a>
        <a class="blog8" href="preloader-blog.php" id="blog">Blog</a>
        <a
          class="patient-resources8"
          href="preloader-patient-resources.php"
          id="patientResources"
          >Patient Resources</a
        >
        <a
          class="customer-support8"
          href="preloader-customer-support.php"
          id="customerSupport"
          >Customer support</a
        >
        <a class="testimonials11" href="preloader-testimonials.php" id="testimonials"
          >Testimonials</a
        >
        <a class="find-us8" href="preloader-find-us.php" id="findUs">Find us</a>
        <a class="about-us22" href="preloader-about-us.php" id="aboutUs">About us</a>
        <div class="underbar7"></div>
      </div>
      <div class="book-appointment">
        <div class="appointment-header">
          <div class="home-our-team">Home &gt;&gt;Our Team</div>
          <b class="the-team">The Team</b>
          <img class="picture-icon6" alt="" src="./public/picture5@2x.png" />
        </div>
        <div class="excellent-practitioners">Excellent Practitioners</div>
        <div class="at-healthlink-we">
          At Healthlink, we take pride in being the link between pharmacists and
          customers, fostering a seamless connection in the realm of healthcare.
          Our team is dedicated to facilitating a smooth and efficient
          experience, ensuring that you have convenient access to the
          medications you need. With a passion for enhancing health services, we
          are committed to creating a bridge that prioritizes your well-being.
        </div>
        <img
          class="istockphoto-1346227626-170667a-icon"
          alt=""
          src="./public/istockphoto1346227626170667a-1@2x.png"
        />
      </div>
      <div class="footer7">
        <div class="footer-child4"></div>
        <div class="logo17">
          <img
            class="paramedic-sign-icon16"
            alt=""
            src="./public/paramedicsign.svg"
          />

          <div class="healthlink-medical-center-container16">
            <span class="healthlink-medical16">HealthLink Medical</span>
           
          </div>
          <div class="ilishan-remo7">ILISHAN - REMO, Ogun State</div>
        </div>
        <div class="about-us23">
          <b class="about-us24">About us</b>
          <div class="about-healthlink7" id="aboutHealthLinkText">
            About HealthLink
          </div>
          <div class="news-media7" id="newsMedia">News & Media</div>
        </div>
        <div class="quick-links14">
          <b class="quick-links15">Quick Links</b>
          <div class="ecare7" id="ecareText">Ecare</div>
          <div class="book-an-appointment7" id="bookAnAppointment">
            Book an appointment
          </div>
        </div>
        <div class="contact-us14">
          <b class="contact-us15">Contact us</b>
          <div class="div49">0903 278 9805</div>
          <div class="div50">0703 312 6462</div>
          <div class="div51">0813 869 7269</div>
          <div class="div52">0812 814 7306</div>
          <div class="div53">0810 708 7981</div>
          <div class="div54">0811 862 7387</div>
          <div class="div55">0907 691 2476</div>
        </div>
        <div class="socials7">
          <div class="follow-us7">Follow us:</div>
          <a class="facebook7" target="_blank">
            <img class="vector-icon111" alt="" src="./public/vector5.svg" />
          </a>
          <a class="linkedin7" target="_blank">
            <img class="vector-icon112" alt="" src="./public/vector6.svg" />

            <img class="vector-icon113" alt="" src="./public/vector19.svg" />

            <img class="vector-icon114" alt="" src="./public/vector8.svg" />

            <img class="vector-icon115" alt="" src="./public/vector9.svg" />

            <img class="vector-icon116" alt="" src="./public/vector10.svg" />
          </a>
          <a class="youtube7" target="_blank">
            <img class="vector-icon117" alt="" src="./public/vector11.svg" />

            <img class="vector-icon118" alt="" src="./public/vector12.svg" />
          </a>
          <a class="twitter7" target="_blank">
            <img class="vector-icon119" alt="" src="./public/vector13.svg" />

            <img class="vector-icon120" alt="" src="./public/vector14.svg" />

            <img class="vector-icon121" alt="" src="./public/vector15.svg" />
          </a>
          <a class="instagram7" target="_blank">
            <img class="vector-icon122" alt="" src="./public/vector16.svg" />

            <img class="vector-icon123" alt="" src="./public/vector20.svg" />

            <img class="vector-icon124" alt="" src="./public/vector18.svg" />
          </a>
        </div>
      </div>
    </div>

    <script>
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
      
      var findUs = document.getElementById("findUs");
      if (findUs) {
        findUs.addEventListener("click", function (e) {
          window.location.href = "./find-us.html";
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
