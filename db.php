<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}



if (isset($_POST['recup'])) {

    $nom = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];

    $service = $_POST['services'];
    $Date = $_POST['visitDate'];
    $Time = $_POST['schedule'];
    $Message = $_POST['messages'];

    $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES(0,:nom,:email,:telephone,:services,:date_de_visite,:heure_de_visite,:message_utilisateur)");
    $requete->execute(
        array(
            "nom" => $nom,
            "email" => $email,
            "telephone" => $phone,
            "services" => $service,
            "date_de_visite" => $Date,
            "heure_de_visite" => $Time,
            "message_utilisateur" => $Message
        )
    );

    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
}

?>

<link rel="stylesheet" href="ProjetFinalVetx.css">
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
<img src="images/logo-vet%2520(1).svg" alt="" class=logoredirection>
<div class="redirection">
    <h1 class=messagephp>Merci ! <br>Votre requête a bien été prise en charge</h1>
    <a href="VetxHome.html">
        <p class="redirectionphp">Cliquez ici pour revenir à l'accueil</p>
    </a>
</div>