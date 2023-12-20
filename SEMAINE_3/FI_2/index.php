<?php

// Déclaration d'un tableau multidimensionnel
$actors = [
    "Indiana Jones" => [
        "titre" => "Les Aventuriers de l'Arche perdue",
        "titre" => "Indiana Jones et le Temple Maudit",
        "titre" => "Indiana Jones et la dernière croisade",
        "titre" => "Indiana Jones et le royaume du crâne de cristal",
        "titre" => "Indiana Jones et le Cadran de la Destinée", "année"
    ],

    "Marion Ravenwood" => [
        "titre" => "Les Aventuriers de l'Arche perdue",
        "titre" => "Indiana Jones et le royaume du crâne de cristal",
        "titre" => "Indiana Jones et le Cadran de la Destinée",
    ],
    "Mutt" => [
        "titre" => "Indiana Jones et le royaume du crâne de cristal",
    ]
];

// echo "Dans le film $actors, les principaux acteurs sont : " . PHP_EOL;

echo($actors);