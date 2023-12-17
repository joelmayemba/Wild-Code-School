<?php

$name = "Indiana Jones et la dernière croisade";
$alreadySeen =  true;
$dateRelase = 1989;
$rate =  8.2;


if  ($alreadySeen == true){
    echo "Le nom du film est $name Il est sorti au cinema en $dateRelase"
}
else{
    echo "Le nom du film est" .$name. "Il est sorti au cinéma en". $dateRelase
}
?>