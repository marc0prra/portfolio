/************************ CAROUSEL ACUEIL *******************************/
document.addEventListener('DOMContentLoaded', function () {
    const carouselPart = document.getElementById('carouselPart');
    const backPart = document.getElementById('backPart');
    const nextPart = document.getElementById('nextPart');
    const dots = document.querySelectorAll(".dot");
    
    let currentIndex = 0;
    const totalSlides = dots.length;
    let autoSlideInterval;

    function getSlideWidth() {
        return document.querySelector(".carouselH").clientWidth;
    }

    function updateCarousel() {
        const slideWidth = getSlideWidth();
        const translateValue = -currentIndex * slideWidth;
        carouselPart.style.transform = `translateX(${translateValue}px)`;
        updatePagination();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }

    function updatePagination() {
        dots.forEach(dot => dot.classList.remove("active"));
        dots[currentIndex].classList.add("active");
    }

    dots.forEach(dot => {
        dot.addEventListener("click", function () {
            currentIndex = parseInt(this.getAttribute("data-index"));
            updateCarousel();
            resetAutoSlide(); 
        });
    });

    backPart.addEventListener('click', function () {
        prevSlide();
        resetAutoSlide(); 
    });

    nextPart.addEventListener('click', function () {
        nextSlide();
        resetAutoSlide();
    });

    window.addEventListener('resize', updateCarousel);

    // === AUTO-SLIDE ===
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    startAutoSlide();

    updateCarousel();
});



//******************** afficher le menu masquer **********************/
document.querySelectorAll(".toggle-details").forEach(button => {
    button.addEventListener("click", () => {
        let project = button.closest(".project"); 
        project.classList.toggle("open"); 
  
        if (project.classList.contains("open")) {
            button.textContent = "Pour réduire appuyer ici <";
        } else {
            button.textContent = "Pour voir plus de détails cliquez ici >";
        }
    });
  });
  


//*************************** BURGER MENU *******************************/
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu"); 
  const closeButton = document.getElementById("closeMenu"); 

  console.log("Script chargé !");
  console.log("menuToggle trouvé :", menuToggle);
  console.log("mobileMenu trouvé :", mobileMenu);
  console.log("closeButton trouvé :", closeButton);

  if (menuToggle && mobileMenu && closeButton) {
      menuToggle.addEventListener("click", function (event) {
          event.stopPropagation(); 
          mobileMenu.classList.toggle("active");
          console.log("Clic sur menuToggle - menu ouvert ?");
      });

      closeButton.addEventListener("click", function () {
          mobileMenu.classList.remove("active");
          console.log("Clic sur closeButton - menu fermé");
      });

      document.addEventListener("click", function (event) {
          if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
              mobileMenu.classList.remove("active");
              console.log("Clic à l'extérieur - menu fermé");
          }
      });
  } else {
      console.error("Problème : Un ou plusieurs éléments sont introuvables.");
  }
});


function showPopup(message) {
    console.log("🔔 Affichage du popup : " + message);
    var popup = document.getElementById("popupMessage");
    var popupText = document.getElementById("popupText");
    var closeButton = document.querySelector(".close-popup");

    if (!popup || !popupText || !closeButton) {
        console.error("Éléments du popup non trouvés !");
        return;
    }

    popupText.innerHTML = message;
    popup.style.display = "flex";

    closeButton.addEventListener("click", function () {
        popup.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
}

/********************************************* DARK MODE *******************************************/
document.addEventListener('DOMContentLoaded', () => {
    const topSection = document.querySelector('.topBtn'); // Sélectionne la section contenant les boutons
    if (topSection) {
        const darkModeButton = document.createElement('button');
        darkModeButton.textContent = 'Mode Sombre';
        darkModeButton.id = 'dark-mode-toggle';
        topSection.appendChild(darkModeButton);

        // Vérification du mode sombre stocké dans localStorage au chargement
        if (localStorage.getItem('darkMode') === 'enabled') {
            document.body.classList.add('dark-mode');
            darkModeButton.classList.add('dark-btn'); // Ajoute la classe au bouton
            applyDarkModeStyles(); // Appliquer les styles immédiatement
        }

        // Gestion du clic sur le bouton
        darkModeButton.addEventListener('click', () => {
            if (!document.body.classList.contains('dark-mode')) {
                document.body.classList.add('dark-mode');
                darkModeButton.classList.add('dark-btn'); // Ajoute le style du bouton sombre
                localStorage.setItem('darkMode', 'enabled');
                applyDarkModeStyles();
            } else {
                document.body.classList.remove('dark-mode');
                darkModeButton.classList.remove('dark-btn'); // Retire le style du bouton sombre
                localStorage.setItem('darkMode', 'disabled');
                removeDarkModeStyles();
            }
        });
    }
});

// Fonction pour appliquer les styles du mode sombre
function applyDarkModeStyles() {
    let style = document.getElementById('dark-mode-styles');
    if (!style) { // Vérifier si les styles n'ont pas déjà été ajoutés
        style = document.createElement('style');
        style.id = 'dark-mode-styles';
        style.textContent = `
            .dark-mode, .buttons_os button, body {
                background-color: #121212;
                color: white;
            }
            .dark-mode .top, .dark-mode .footer, .dark-mode .footer p, .mid {
                background-color: #1e1e1e;
            }
            .dark-mode .topBtn a {
                color: white;
            }
            .dot {
                background-color: white;
            }
            .dark-mode .toggle-details {
                background-color: white;
                color: black;
            }
            .dark-mode h1, h2, h3, h4, h5, h6, p, .wholeCar h2, .items h2, .textP p {
                color: white;
            }
            /* Styles du bouton Mode Sombre */
            #dark-mode-toggle {
                border: none;
                cursor: pointer;
                background-color: #f0f0f0; /* Mode clair */
                color: black;
                transition: background-color 0.3s, color 0.3s;
            }
            /* Styles du bouton en mode sombre */
            .dark-mode #dark-mode-toggle, .dark-btn {
                background-color: #1e1e1e !important;
                color: white !important;
            }
            #about {
                background: none;
            }
            .skill-bar .skill-per {
                background-color: white;
                color: white;
            }
            .skill-box .title {
                color: white;
            }
            .container {
                box-shadow: 60px -50px #bbb3b3, -2px 3px 7px #8b8484;
            }
            .about-text a {
                color: #3535d9;
            }
            #pause-btn {
                background-color: #3535d9;
            }
            .project {
                border: none;
            }
            .wrapper{
                background-color : #1e1e1e;
            }
            header h2{
                color : #3535d9;
            }
            .wrapper .data p{
                color : white;
            }
            .data p a{
                color : #ffc14f;
            }
            .buttons .button{
                background-color : #3535d9;
            }
            .details h3 {
                color : black
            }
            .form-group label, .blocF h3{
                color : #3535d9;
            }
            .blocF{
                border : #3535d9 3px solid;
            }
            .Submit_fo {
                border : #3535d9; 2px solid;
                background-color : #3535d9;
            }
        `;
        document.head.appendChild(style);
    }
}

// Fonction pour retirer les styles du mode sombre
function removeDarkModeStyles() {
    const existingStyle = document.getElementById('dark-mode-styles');
    if (existingStyle) {
        existingStyle.remove();
    }
}




/*******************************  COOKIES POP UP *************************************/

const cookieBox = document.querySelector(".wrapper"),
      buttons = document.querySelectorAll(".button");

const executeCodes = () => {
    cookieBox.classList.add("show");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            cookieBox.classList.remove("show");

            // if button has acceptBtn id
            if (button.id == "acceptBtn") {
                // set cookies for 1 month. 60 = 1 min, 60 = 1 hour, 24 = 1 day, 30 = 30 days
                document.cookie = "cookieBy=codinglab; max-age=" + 60 * 60 * 24 * 30;
            }
        });
    });
};

window.addEventListener("load", executeCodes);



/********************* ANIMATION *******************************/
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(
      ".welcome, .carouselPart, .who, .footer, .about-text, .container, .project, .items h2"
    );
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.animationPlayState = "running";
          }
        });
      },
      { threshold: 0.2 }
    );
  
    elements.forEach((element) => {
      element.style.animationPlayState = "paused";
      observer.observe(element);
    });
});
  
  
/******************** BOUTTON PAUSE  ********************/
document.addEventListener("DOMContentLoaded", function () {
    const pauseBtn = document.getElementById("pause-btn");
    let animationsPaused = false;
  
    pauseBtn.addEventListener("click", function () {
      const elements = document.querySelectorAll("*");
  
      animationsPaused = !animationsPaused;
  
      elements.forEach((el) => {
        if (window.getComputedStyle(el).animationName !== "none") {
          el.style.animationPlayState = animationsPaused ? "paused" : "running";
        }
      });
  
      pauseBtn.innerHTML = animationsPaused ? "►" : "▌▌";
    });
});


/**************** POP UP CONTACT *************************************/
document.addEventListener("DOMContentLoaded", function () {
    if (sessionStorage.getItem("popupShown") === "true") {
        showPopup("Votre message a bien été envoyé !");
        sessionStorage.removeItem("popupShown");
    }
});

function handleFormSubmission(event) {
    event.preventDefault(); 

    setTimeout(() => {
        sessionStorage.setItem("popupShown", "true"); 
        document.getElementById("contact-form").submit(); 
    }, 500); 
}

function showPopup(message) {
    let popup = document.createElement("div");
    popup.className = "popup-message";
    popup.innerText = message;
    document.body.appendChild(popup);

    setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.remove();
        }, 500);
    }, 3000);
}

document.getElementById("form-submit").addEventListener("click", handleFormSubmission);