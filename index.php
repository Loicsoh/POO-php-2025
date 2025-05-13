<?php
    require_once 'Class/Employer.php';

    // Instanciation de la classe Employer
    $employer1 = new Employer("Jean", "Dupont", 25);
    $employer2 = new Employer("Nick", "Florida", 32);

    // Appel de la méthode presentation
    $employer1->pesentation();
    $employer2->pesentation();






    $nom1 = "Jean";
    $prenom = "Dupont";
    $age = 25;

    $nom1 = "nick";
    $prenom = "florid";
    $age = 32;

    function presentation($nom1, $prenom, $age) {
        echo "<pre>";
        var_dump("Bonjour, je m'appelle <b>$nom1 $prenom</b> et j'ai <b>$age</b> ans.");
        echo "</pre>";
    }

    presentation($nom1, $prenom, $age);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>initiation a la programmation oriente objet en php</h1>
</body>
</html>