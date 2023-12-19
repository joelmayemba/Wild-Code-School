<?php



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

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
$users = ["Simon", "Yohan", "Arthur", "Paul", "Pierre", "Marie", "Virginie", "Valentin", "Laurent", "Julien"];
print_r($users);

// Randomly select a nunmber of first name for testing

$userCount = rand(0, 9);

/*foreach ($users as $haveLiked => $post) {
    echo $haveLiked . " - " . $post . PHP_EOL;
}*/

//#Retourne le nombre de personnes qui ont aimés la publication
// echo "Il y'a ". count($users). " " . "qui ont aimés la publication.";

// Get random name

function getRandomName($users)
{
    $randomIndex = array_rand($users);
    return $users[$randomIndex];
}

// Function gernerate Sentence

function generateSentence($userCount, $users)
{
    switch ($userCount) {
        case 0:
            return "Be the first to like this post";
        case 1:
            return getRandomName($users) . " like this post";
        case 2:
            return implode(" and ", array_slice($users, 0, 2)) . " like this post";
        default:
            return current($users) . " and " . (count($users) - 1) . " other people liked this post";
    }
}

echo generateSentence($userCount, $users);
