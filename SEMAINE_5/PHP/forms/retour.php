<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $subject = isset($_POST["SelectSubject"]) ? $_POST["SelectSubject"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
}

$errors = [];
// $patternTel = "/^\+(?:[0-9] ?){6,14}[0-9]$/";


if (empty($lastname)) {
    $errors[] = "Le nom est obligatoire.";
}

if (empty($firstname)) {
    $errors[] = "Le prénom est obligatoire.";
}

if (empty($tel)) {
    $errors[] = "Le numéro de téléphone est obligatoire.";
} elseif (strlen($tel) != 10) {
    $errors[] = "Le numéro de téléphone n'est pas valide.";
}

if (empty($email)) {
    $errors[] = "L'adresse e-mail est obligatoire.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse e-mail n'est pas valide.";
}

if (empty($subject)) {
    $errors[] = "Le sujet est obligatoire.";
}

if (empty($message)) {
    $errors[] = "Le message est obligatoire.";
} elseif (strlen($message) < 10) {
    $errors[] = "Le message est trop court";
}

if (!empty($errors)) {
    require 'error.php';
    die();
}


?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires en PHP - 1. Retour des informations</title>
    <link rel="stylesheet" href="style.css">
</head>

<!-- <?= var_dump($_POST); ?> -->

<body>

    <main>
        <div class="wrapper">
            <form class="form-signin">
                <h2>Message envoyé</h2>
                <div class="row">
                    <p>Merci <span><?= $firstname ?> <?= $lastname ?></span> de nous avoir contacté à propos de <span class="subject"><?= $subject ?></span> </P>
                    <p>Un de nos conseillers vous contactera soit à l’adresse <span><?= $email ?></span> ou par téléphone au <span><?= $tel ?></span> dans les plus brefs délais pour traiter votre demande :</p>
                    <div class="message">
                        <span>
                            <p><?= $message ?></p>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>