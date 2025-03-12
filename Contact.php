<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "mysql-lyceestvincent.alwaysdata.net"; 
$username = "116313_mpereira"; 
$password = "Imao/2019"; 
$dbname = "lyceestvincent_mpereira"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST["nom"] ?? "");
    $prenom = trim($_POST["prenom"] ?? "");
    $telephone = trim($_POST["telephone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if (empty($nom) || empty($prenom) || empty($telephone) || empty($email) || empty($message)) {
        $_SESSION["error_message"] = "Tous les champs sont obligatoires.";
    } else {
        $stmt = $conn->prepare("INSERT INTO contacts (nom, prenom, telephone, email, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nom, $prenom, $telephone, $email, $message);

        if ($stmt->execute()) {
            $_SESSION["success_message"] = "Votre message a bien été envoyé !";
        } else {
            $_SESSION["error_message"] = "Erreur SQL : " . $conn->error;
        }

        $stmt->close();
    }

    $conn->close();
    header("Location: Contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="img/icone.ico" />

    <title>Contact</title>
</head>
<body>
    <div class="top">
        <div class="topBtn">
            <a href="./index.php"><h4>Accueil</h4></a>
            <a href="./Apropos.php"><h4>À propos</h4></a>
            <a href="./Projets.php"><h4>Mes Projets</h4></a>
            <a href="./Contact.php"><h4 class="mainP">Contact</h4></a>
        </div>
        <div class="burgerMenu">
            <button class="menu__icon" id="menuToggle">
                <span></span><span></span><span></span>
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

    <?php if (isset($_SESSION["success_message"])): ?>
        <div id="popupMessage" class="popup">
            <div class="popup-content">
                <p id="popupText"><?php echo $_SESSION["success_message"]; ?></p>
                <button class="close-popup" onclick="closePopup()">OK</button>
            </div>
        </div>
        <?php unset($_SESSION["success_message"]); ?>
    <?php endif; ?>

    <div class="formulary">
        <div class="blocF">
            <h3>Contactez-moi</h3>

            <form action="Contact.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" class="case" placeholder="Nom *" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" class="case" placeholder="Prénom *" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input type="tel" name="telephone" id="telephone" class="case" placeholder="+33 ... *" required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="case" placeholder="exemple@yourmail.com *" required>
                </div>

                <div class="form-group">
                    <label for="message">Message (optionnel) :</label>
                    <textarea name="message" id="message" class="msg"></textarea>
                </div>

                <button type="submit" class="Submit_fo">Envoyer</button>
                <button type="reset" class="Reset_fo">Réinitialiser</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                if (typeof showPopup === "function") { 
                    showPopup("✅ Votre message a bien été envoyé !");
                }
            }, 500);
        });
    </script>

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
