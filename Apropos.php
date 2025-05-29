<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="img/icone.ico" />

    <title>A propos</title>
  </head>
<body>
  <div class="top">
    <div class="topBtn">
      <a href="./index.php"><h4>Accueil</h4></a>
      <a href="./Apropos.php"><h4 class="mainP">A propos</h4></a>
      <a href="./Projets.php"><h4>Mes Projets</h4></a>
      <a href="./Contact.php"><h4>Contact</h4></a>
    </div>
    <div class="burgerMenu">
      <button class="menu__icon" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <nav class="mobile-menu" id="mobileMenu">
      <button class="close-menu" id="closeMenu">X</button>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="Apropos.php">À propos</a></li>
        <li><a href="Projets.php">Mes Projets</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
  <section id="about">
    <div class="about-container">
      <div class="about-text">
        <h2>À propos de moi</h2>
        <p>
          Passionné par le développement web et les nouvelles technologies, je
          suis actuellement étudiant en <strong>BTS SIO</strong>. Je me
          spécialise dans le <strong>développement web</strong> et j’aime
          relever de nouveaux défis à travers mes projets.
          Maîtrisant les bases du <strong>HTML, CSS, JavaScript</strong>,
          j’aspire à devenir un développeur polyvalent et créatif. Je suis
          toujours en quête d’apprentissage et d’amélioration.
        </p>
        <p>
          <strong class="interest">Intéressé par mon profil ?</strong>
          <a href="Contact.php">Contactez-moi !</a> 
          <div class="resume">
            <strong>Voici mon CV</strong><a href="img/CV .pdf" target="_blank"> cliquez ici pour le téléchcarger !</a>
          </div>
        </p>
        <div class="web">
          <h2>Ce site est composé de :</h2>
      </div>
      </div>
    </div>

    <div class="container">
        <div class="skill-box">
            <span class="title">HTML</span>

            <div class="skill-bar">
                <span class="skill-per html">
                    <span class="tooltip">20%</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title">CSS</span>

            <div class="skill-bar">
                <span class="skill-per css">
                    <span class="tooltip">60%</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title">JS</span>

            <div class="skill-bar">
                <span class="skill-per javascript">
                    <span class="tooltip">10%</span>
                </span>
            </div>
        </div>
        <div class="skill-box">
            <span class="title">PHP</span>

            <div class="skill-bar">
                <span class="skill-per nodejs">
                    <span class="tooltip">10%</span>
                </span>
            </div>
        </div>
    </div>
    <div class="certif">
    <section class="certifications">
  <h2>Certifications</h2>
  <div class="certification-container">
    <div class="certification-card">
      <h3>Pix</h3>
      <img src="img/Pix_logo.svg.png" alt="">
      <p>Certification obtenue.</p>
    </div>
    <div class="certification-card">
      <h3>OpenClassrooms</h3>
      <img src="img/Logo_OpenClassrooms.png" alt="">
      <p>En cours.</p>
    </div>
    <div class="certification-card">
      <h3>Projet Voltaire</h3>
      <img src="img/25781_xgGv8YtlnN3dZamc.jpg" alt="">
      <p>En cours.</p>
    </div>
  </div>
</section>
    </div>
    <button id="pause-btn">▌▌</button>
  </section>
  <div class="slider-container" id="carousel">
    <div class="slider-track">
    <div class="slider-item">
      <img src="img/python.png" alt="Python">
      <p><strong>Python :</strong> <b>(Septembre 2022)</b> Un langage simple et puissant, que j’ai découvert il y a quelques années en classe de NSI et que j’utilise encore pour divers projets.</p>
  </div>
    <div class="slider-item">
      <img src="img/html2.png" alt="HTML">
      <p><strong>HTML :</strong> <b>(Septembre 2024)</b> La base du web ! Simple mais fondamental, il permet de structurer une page avant de lui donner du style avec CSS.</p>
  </div>
  <div class="slider-item">
      <img src="img/css2.png" alt="CSS">
      <p><strong>CSS :</strong> <b>(Septembre 2024)</b> Utiliser pour donner du style aux sites web, j'ai commencé a l'apprendre en meme temps que le html.</p>
  </div>
  <div class="slider-item">
      <img src="img/ch.png" alt="C#">
      <p><strong>C# :</strong> <b>(Septembre 2024)</b>Un langage intéressant, notamment pour les applications mobiles, que je viens de connaitre depuis seulement cette année.</p>
  </div>
  <div class="slider-item">
      <img src="img/js.png" alt="JavaScript">
      <p><strong>JavaScript :</strong> <b>(Décembre 2024)</b> Un langage que j'apprécie beaucoup car il permet de rendre les sites interactifs et dynamiques.</p>
  </div>
  <div class="slider-item">
     <img src="img/sql2.png" alt="SQL">
     <p><strong>SQL :</strong> <b>(Janvier 2025)</b> Indispensable pour gérer les bases de données. C'est un langage que j’utilise pour structurer des données efficacement.</p>
  </div>
  <div class="slider-item">
      <img src="img/php1.png" alt="PHP">
      <p><strong>PHP :</strong><b>(Janvier 2025)</b>  Un langage serveur puissant que j’apprends à maîtriser, essentiel pour le développement web et la gestion des bases de données.</p>
  </div>
        
  <div class="slider-item">
      <img src="img/python.png" alt="Python">
      <p><strong>Python :</strong> <b>(Septembre 2022)</b> Un langage simple et puissant, que j’ai découvert il y a quelques années en classe de NSI et que j’utilise encore pour divers projets.</p>
  </div>
    <div class="slider-item">
      <img src="img/html2.png" alt="HTML">
      <p><strong>HTML :</strong> <b>(Septembre 2024)</b> La base du web ! Simple mais fondamental, il permet de structurer une page avant de lui donner du style avec CSS.</p>
  </div>
  <div class="slider-item">
      <img src="img/css2.png" alt="CSS">
      <p><strong>CSS :</strong> <b>(Septembre 2024)</b> Utiliser pour donner du style aux sites web, j'ai commencé a l'apprendre en meme temps que le html.</p>
  </div>
  <div class="slider-item">
      <img src="img/ch.png" alt="C#">
      <p><strong>C# :</strong> <b>(Septembre 2024)</b>Un langage intéressant, notamment pour les applications mobiles, que je viens de connaitre depuis seulement cette année.</p>
  </div>
  <div class="slider-item">
      <img src="img/js.png" alt="JavaScript">
      <p><strong>JavaScript :</strong> <b>(Décembre 2024)</b> Un langage que j'apprécie beaucoup car il permet de rendre les sites interactifs et dynamiques.</p>
  </div>
  <div class="slider-item">
     <img src="img/sql2.png" alt="SQL">
     <p><strong>SQL :</strong> <b>(Janvier 2025)</b> Indispensable pour gérer les bases de données. C'est un langage que j’utilise pour structurer des données efficacement.</p>
  </div>
  <div class="slider-item">
      <img src="img/php1.png" alt="PHP">
      <p><strong>PHP :</strong><b>(Janvier 2025)</b>  Un langage serveur puissant que j’apprends à maîtriser, essentiel pour le développement web et la gestion des bases de données.</p>
  </div>

    </div>
  </div>
  <div class="footer">
    <div class="footerB">
      <div class="topF">
        <div class="social">
        <a
            href="https://github.com/marc0prra"
            class="social-link1"
            target="_blank"
          >
          <img src="img/git.png" alt="" class="whatsapp"/>
          </a>
          <a
            href="https://www.linkedin.com/in/marco-pereira-a9476934b/"
            class="social-link2"
            target="_blank"
          >
          <img src="img/link.png" alt="" class="whatsapp"/>
          </a>
          <a
            href="https://www.facebook.com/"
            class="social-link3"
            target="_blank"
          >
          <img src="img/facebook.png" alt="" class="whatsapp"/>
          </a>
          <a
            href="https://web.whatsapp.com/"
            class="social-link4"
            target="_blank"
          >
          <img src="img/whatsapp.png" alt="" class="whatsapp"/>
          </a>
        </div>
      </div>
      <div class="credits">
        <p>© Tous droits révervés par Marco Pereira.</p>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>

