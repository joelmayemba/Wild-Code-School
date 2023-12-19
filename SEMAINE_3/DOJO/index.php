<?php

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
// * *"Soyez le premier à aimer cette publication"*,
// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing




// $users = ['Simon'];
// $users = ['Yohan'];
// $users = ['Pierre', 'Marie'];
// $users = ['Paul', 'Arthur'];
// $users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];
// $users = ['Virginie', 'Paul', 'Julien', 'Simon'];

//write you're code below

$like = 1;
$users = array("Simon", "Yohan", "Arthur");
// $users = ["Simon","Yohan","Arthur","Paul","Pierre","Marie","Virginie","Valentin","Laurent","Julien"];


print_r($users);

for ($i = 0; $i <= $users; $i++) {
    echo "Le numéro est : $i <br>";
}

foreach ($users as $haveLiked => $post) {
    echo $haveLiked . " - " . $post . PHP_EOL;
}
