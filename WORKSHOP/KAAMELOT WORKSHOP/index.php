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
            <form class="form-signin" action="retour.php" method="post">

                <h2 class="login-header">Liste des ouvrages</h2>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kaamelott";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * FROM story";
                    $result = $conn->query($sql);

                    if ($result->rowCount() > 0) {
                        foreach ($result as $row) {

                            echo "ID: " . $row['ID'] . "<br>";
                            echo "Title: " . $row['TITLE'] . "<br>";
                            echo "Content: " . $row['CONTENT'] . "<br>";
                            echo "Author: " . $row['AUTHOR'] . "<br>";
                            echo "<hr>";
                        }
                    } else {
                        echo "Aucun résultat trouvé dans la base de données.";
                    }
                } catch (PDOException $e) {
                    echo "Erreur de connexion à la base de données: " . $e->getMessage();
                }

                // Fermer la connexion à la base de données
                $conn = null;
                ?>
                <div>
                    <a href="create.php"><button class="btn btn-lg btn-block" type="button"> Add </button></a>
                </div>
            </form>
        </div>
    </main>

    <section>
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>Sites</h1>
                    </th>
                    <th>
                        <h1>Views</h1>
                    </th>
                    <th>
                        <h1>Clicks</h1>
                    </th>
                    <th>
                        <h1>Average</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Google</td>
                    <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
            </tbody>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>