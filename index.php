<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css?v=2">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/icone.ico" />

    <title>Accueil</title>
  </head>
  <body>

    <div class="top">
      <div class="topBtn">
        <a href="index.php"><h4 class="mainP">Accueil</h4></a>
        <a href="Apropos.php"><h4>À propos</h4></a>
        <a href="Projets.php"><h4>Mes Projets</h4></a>
        <a href="Contact.php"><h4>Contact</h4></a>
      </div>
      <div class="burgerMenu">
        <button class="menu__icon" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <nav class="mobile-menu" id="mobileMenu">
        <button class="close-menu" id="closeMenu">✖</button>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="Apropos.php">À propos</a></li>
          <li><a href="Projets.php">Mes Projets</a></li>
          <li><a href="Contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="midd">
      <h1 class="welcome">Bienvenue sur mon Portfolio !</h1>
      <div class="who">
        <div class="about-text">
          <h2>Qui suis-je ?</h2>
          <div class="textP">
            <p>
              Bonjour, je m'appelle <strong>Marco Pereira</strong> et je suis
              étudiant en <strong>BTS SIO</strong>. Passionné par le développement
              web et les nouvelles technologies, je me spécialise progressivement
              dans le <strong>développement web</strong> et j’aime relever de
              nouveaux défis à travers mes projets.
            </p>
            <p>
              Maîtrisant les bases du <strong>HTML, CSS, JavaScript</strong>,
              j’aspire à devenir un développeur polyvalent et créatif. Toujours
              curieux et en quête d’amélioration, j’aime apprendre de nouvelles
              technologies pour <strong>enrichir mes compétences.</strong>
            </p>
          </div>
        </div>
        <img src="img/moi.jpg" alt="Photo de moi" class="imgW" />
      </div>

      <div class="wholeCar">
        <h2>Mes projets :</h2>
        <div class="slide">
          <div class="carouselPart" id="carouselPart">
            <div class="carouselH" data-index="0">
              <a href="projetVetx/VetxHome.html" target="_blank">
                <img src="img/Capture d’écran (97).png" alt="Slide 1"/>
              </a>
            </div>
            <div class="carouselH" data-index="1">
              <a href="BLOC FINAL ALL/index.html" target="_blank">
                <img src="img/Capture d’écran (94).png" alt="Slide 2"/>
              </a>
            </div>
            <div class="carouselH" data-index="2">
              <a href="SITE POC/index.html" target="_blank">
                <img src="img/Capture d’écran (95).png" alt="Slide 3"/>
              </a>
            </div>
            <div class="carouselH" data-index="3">
              <a href="SITE N1/index.html" target="_blank">
                <img src="SITE N1/Capture d’écran (98).png" alt="Slide 4"/>
              </a>
            </div>
          </div>
        </div>
        <div class="buttons_os">
          <button id="backPart"><</button>
          <div id="carouselPagination" class="pagination">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
            <span class="dot" data-index="3"></span>
          </div>
          <button id="nextPart">></button>
        </div>
      </div>
    </div>

    <div class="items">
      <h2>Mes compétences :</h2>
      <div class="skills">
        <div data-text="HTML" style="--r:-15;" class="glass">
          <img src="img/html.png" alt="HTML">
        </div>
        <div data-text="CSS" style="--r:5;" class="glass">
          <img src="img/cascading-style-sheets.png" alt="CSS">
        </div>
        <div data-text="JavaScript" style="--r:25;" class="glass">
          <img src="img/js-file.png" alt="JavaScript">
        </div>
        <div data-text="PHP" style="--r:5;" class="glass">
          <img src="img/php2.png" alt="PHP">
        </div>
      </div>
    </div>

    <div class="wrapper">
      <header>
        <h2>Consentement aux cookies</h2>
      </header>
      <div class="data">
        <p>Ce site Web utilise des cookies pour améliorer votre expérience de navigation.
          <a href="#"> En savoir plus ...</a>
        </p>
      </div>
      <div class="buttons">
        <button class="button" id="acceptBtn">Accepter</button>
        <button class="button" id="declineBtn">Refuser</button>
      </div>
    </div>

    <div class="more">
      <a href="./Apropos.php" class="toggle-details">En savoir plus</a>
    </div>

    <div class="footer">
      <div class="footerB">
        <div class="topF">
          <div class="social">
            <a href="https://github.com/marc0prra" class="social-link1" target="_blank">
              <img src="img/git.png" alt="GitHub"/>
            </a>
            <a href="https://www.linkedin.com/in/marco-pereira-a9476934b/" class="social-link2" target="_blank">
              <img src="img/link.png" alt="LinkedIn"/>
            </a>
            <a href="https://facebook.com/" class="social-link3" target="_blank">
              <img src="img/facebook.png" alt="Facebook"/>
            </a>
            <a href="https://web.whatsapp.com/" class="social-link4" target="_blank">
              <img src="img/whatsapp.png" alt="WhatsApp"/>
            </a>
          </div>
        </div>
        <div class="credits">
          <p>© Tous droits réservés par Marco Pereira.</p>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
