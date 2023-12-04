<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./home.css" />
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
    <div class="home2">
      <div class="logo-header2">
        <div class="logo3">
          <img
            class="paramedic-sign-icon3"
            alt=""
            src="./public/paramedicsign.svg"
          />

          <div class="healthlink-medical-center-container3">
            <span class="healthlink-medical3">HealthLink Medical</span>
            <span class="span3"> </span>
          </div>
        </div>
      </div>
      <div class="sidebar1">
        <button class="home-btn1" disabled="{true}">
          <div class="effect1"></div>
          <div class="logout">
            <div class="home3">Home</div>
            <img
              class="iconsaxlinearhome1"
              alt=""
              src="./public/iconsaxlinearhome.svg"
            />
          </div>
        </button>
        <a class="logout-btn1" href="index.php" id="logoutBtn">
          <div class="logout">
            <div class="log-out1">Log out</div>
            <img
              class="iconsaxlinearsearchstatus13"
              alt=""
              src="./public/iconsaxlinearsearchstatus1.svg"
            />
          </div>
        </a>
        <img class="sidebar-item" alt="" src="./public/ellipse-5@2x.png" />

        <div class="olivia-reynold1">Olivia Reynold</div>
      </div>
      <div class="post">
        <button class="media-parent">
          <div class="media">Media</div>
          <img class="media-icon" alt="" src="./public/media.svg" />
        </button>
        <button class="article-parent">
          <div class="article">Article</div>
          <img class="blog-icon" alt="" src="./public/blog.svg" />
        </button>
        <img class="post-child" alt="" src="./public/ellipse-5@2x.png" />

        <input
          class="post-item"
          placeholder="Post about something"
          type="text"
        />
      </div>
      <div class="article1">
        <div class="viruses">Viruses</div>
        <div class="viruses-are-microscopic">
          Viruses are microscopic infectious agents that lack the cellular
          structure of living organisms. Composed of genetic material, either
          DNA or RNA, surrounded by a protein coat, viruses are incapable of
          independent life and rely on host cells to replicate. Once inside a
          host, a virus hijacks the cellular machinery to produce more viral
          particles, often causing diseases in plants, animals, and humans.
          Notable examples include the common cold, influenza, and HIV.
          Understanding viral structures and mechanisms is crucial for
          developing effective vaccines and antiviral treatments. Viruses play a
          dual role in nature, both as agents of disease and as tools for
          genetic engineering and medical research.
        </div>
        <div class="picture">
          <img
            class="unsplashrnr8d3fnuny-icon"
            alt=""
            src="./public/unsplashrnr8d3fnuny@2x.png"
          />
        </div>
        <div class="ellipse-parent">
          <img class="group-child" alt="" src="./public/ellipse-5@2x.png" />

          <div class="sarah-thompson1">Sarah Thompson</div>
          <div class="public-health-practitioner">
            Public Health Practitioner
          </div>
          <button class="more">
            <img class="layer-2-icon" alt="" src="./public/layer-2.svg" />
          </button>
          <button class="exit">
            <img class="vector-icon14" alt="" src="./public/vector.svg" />

            <img class="vector-icon14" alt="" src="./public/vector1.svg" />
          </button>
          <div class="group-item"></div>
        </div>
      </div>
      <div class="article2">
        <img class="article-child" alt="" src="./public/ellipse-5@2x.png" />

        <div class="david-moon">David Moon</div>
        <div class="viruses">Fitness</div>
        <div class="fitness-practitioner">Fitness Practitioner</div>
        <div class="viruses-are-microscopic">
          Viruses are microscopic infectious agents that lack the cellular
          structure of living organisms. Composed of genetic material, either
          DNA or RNA, surrounded by a protein coat, viruses are incapable of
          independent life and rely on host cells to replicate. Once inside a
          host, a virus hijacks the cellular machinery to produce more viral
          particles, often causing diseases in plants, animals, and humans.
          Notable examples include the common cold, influenza, and HIV.
          Understanding viral structures and mechanisms is crucial for
          developing effective vaccines and antiviral treatments. Viruses play a
          dual role in nature, both as agents of disease and as tools for
          genetic engineering and medical research.
        </div>
        <button class="more1">
          <img class="layer-2-icon" alt="" src="./public/layer-2.svg" />
        </button>
        <button class="exit1">
          <img class="vector-icon14" alt="" src="./public/vector.svg" />

          <img class="vector-icon14" alt="" src="./public/vector1.svg" />
        </button>
        <div class="picture">
          <img
            class="unsplashrnr8d3fnuny-icon"
            alt=""
            src="./public/unsplashrnr8d3fnuny@2x.png"
          />
        </div>
        <div class="article-item"></div>
      </div>
    </div>

    <script>
      var logoutBtn = document.getElementById("logoutBtn");
      if (logoutBtn) {
        logoutBtn.addEventListener("click", function (e) {
          window.location.href = "./homepage.html";
        });
      }
      </script>
  </body>
</html>
