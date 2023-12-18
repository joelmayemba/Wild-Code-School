<?php

/*
- Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".#
- Récupère ensuite la sous-chaîne de la longueur du chiffre-clé en commençant à partir du 6ème caractère.
- Remplace les chaînes '@#?' par un espace.
- Pour finir, inverse la chaîne de caractères.
- Lance ton code sur chacun des messages suivants, et poste ensuite le code PHP que tu as écrit, ainsi que les textes déchiffrés en commentaires.
*/

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$sentence = "Indiana Jones, le célèbre professeur/archéologue/aventurier, vient de récupérer trois papyrus antiques contenant chacun un message codé !
Heureusement, il a également découvert la manière de le déchiffrer, mais c'est un peu compliqué de le faire à la main.
Il te donne alors les instructions pour que tu développes un petit script permettant d'automatiser le processus.
Cela pourra être d'autant plus utile s'il rencontre à nouveau ce système de chiffrement plus tard.";

// $persons = explode(' ', $sentence); 


$hiddenKey = strlen($sentence)/2;
$sousChaine = substr($sentence,7,$hiddenKey);
$replacement = str_replace("@#?", " ", $message1);

$newCode = strrev($replacement);

echo $sousChaine. PHP_EOL; 


echo $newCode. PHP_EOL; 
?>