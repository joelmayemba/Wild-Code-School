<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kaamelott";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussi";
} catch (PDOException $e) {
    echo "Echec de la connexion" . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $content = isset($_POST["content"]) ? $_POST["content"] : "";
    $author = isset($_POST["author"]) ? $_POST["author"] : "";

    $sql = "INSERT INTO `story`(`TITLE`, `CONTENT`, `AUTHOR`) VALUES (:title, :content, :author)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':author', $author);

    $stmt->execute();
}

?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires en PHP - 1. Récupération</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="wrapper">
            <form class="form-signin" action="#" method="post">
                <div class="title">
                <h2 class="login-header">Ajouter une histoire</h2>
                </div>
                <div>
                    <input type="text" class="form-control" name="title" placeholder="Titre" required="" autofocus="" />
                    <textarea rows="5" class="form-control" name="Contenu" id="message" placeholder="Contenu.."></textarea>
                    <input type="text" class="form-control" name="Author" placeholder="Auteur" required="" autofocus="" />

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Envoyer</button>
            
                        <a href="index.php"> Revenir en arrière </a>
                </div>


            </form>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
