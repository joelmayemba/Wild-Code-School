<?php

$filmsIndiana = [
    "Les Aventuriers de l'Arche Perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman"],
    "Le Temple Maudit" => ["Harrison Ford", "Kate Capshaw", "Jonathan Ke Quan"],
    "La Dernière Croisade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott"],
    "Le royaume du crâne de cristal" => ["Harrison Ford", "Shia Labeouf", "Cate Blanchett"],
    "Le Cadran de la Destinée" => ["Harrison Ford", "Phoebe Waller-Bridge", "Mads Mikkelsen"]
];

foreach ($filmsIndiana as $titreFilm => $acteurs) {
    echo "Dans le film Indiana Jones et $titreFilm, les principaux acteurs sont :" . PHP_EOL;
    foreach ($acteurs as $index => $acteur) {
        echo "- $acteur" . PHP_EOL;
    }
    echo PHP_EOL;
}

?>