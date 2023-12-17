<?php
/*
La première variable doit contenir le nom de ce film d'Indiana Jones, en VO
La seconde variable te permettra d'indiquer si tu as vu, ou non, le film en question
La troisième sera l'année de sortie en salle.
La quatrième la note du film sur le site IMDB.
Affiche ces valeurs les unes sous les autres (tu peux utiliser echo pour afficher une variable.)*/

$name = "Indiana Jones et la dernière croisade, alias Indiana Jones and the Last Crusade";
$alreadySeen =  true;
$dateRelase = 1989;
$rate =  8.2;
$sentence = "Le nom du film est" . " " . $name . "." . " " . "Il est sorti au cinéma en" . " " . $dateRelase . " " . "et a reçu la note de" . " " . $rate . "/10 sur IMDB.";

if ($alreadySeen == true) {
    echo $sentence . " " . "Oui,j'ai déja vu ce film.";
} else {
    echo $sentence . " " . "Non,j'ai jamais vu ce film.";
}
?>