document.querySelectorAll(".boutton").forEach(button => {
    button.addEventListener("click", () => {
        const answer = button.nextElementSibling;
        const icon = button.querySelector(".faq-icon");

        // Affiche ou masque la réponse
        answer.style.display = answer.style.display === "block" ? "none" : "block";

        // Bascule l'état actif du bouton
        button.classList.toggle("active");

        // Change le symbole de l'icône
        icon.textContent = icon.textContent === "+" ? "-" : "+";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const imgElement = document.querySelector("img[src='img_Faq-PZZ7885.jpg']");

    if (imgElement) {
        // Ajout des styles pour le zoom
        imgElement.style.transition = "transform 0.3s ease";

        // Événement : survol avec la souris
        imgElement.addEventListener("mouseenter", () => {
            imgElement.style.transform = "scale(1.2)";
        });

        // Événement : sortie de la souris
        imgElement.addEventListener("mouseleave", () => {
            imgElement.style.transform = "scale(1)";
        });
    } else {
        console.warn("Image img_Faq-PZZ7885.jpg introuvable !");
    }
});
