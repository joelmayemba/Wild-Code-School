<?php
function FistWhipGun()
{
    $weapons = ['fists', 'whip', 'gun'];

    $opponentWeapon = $weapons[rand(0, 2)]; // Cela permet de choisir une arme de manière aléatoire.
    $indyWeapon = $weapons[rand(0, 2)];

    echo "Indiana sort : $indyWeapon et son adversaire : $opponentWeapon" . PHP_EOL;
    if ($indyWeapon == "gun" && $opponentWeapon == "fists" || $indyWeapon == "fists" && $opponentWeapon == "whip" || $indyWeapon == "whip" && $opponentWeapon == "gun") {
        echo "Indiana gagne ce round";
    } else if ($indyWeapon ==  $opponentWeapon) {
        echo "Match nul";
    } else {
        echo "Indiana perd ce round";
    }
}
return FistWhipGun();

?>