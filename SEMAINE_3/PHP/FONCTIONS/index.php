<?php

/* La fonction prend en entrée deux paramètres correctement nommés
Les bons types sont appliqués aux paramètres et au retour,
Le mot clé return est utilisé dans la fonction pour renvoyer le résultat,
L'affichage du résultat se fait bien à l’extérieur de la fonction et non directement dedans,
Le fichier index.php est disponible depuis un lien PHPSandbox. */

function writeSecretSentence()
{
    $dragons = [
        "Infernal" => ["Fire"],
        "Glacial" => ["Ice"],
    ];

    foreach ($dragons as $dragon => $elements) {
        echo "-Le dragon $dragon est sensible à l'élément : " . PHP_EOL;
    }
}

var_dump(writeSecretSentence());

// return writeSecretSentence();