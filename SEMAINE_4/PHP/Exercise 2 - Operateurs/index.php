<?php

// Met à jour le stock 🥜 en utilisant le bon opérateur et affiche-le pour chaque étape.
// 🐘 mange 1 🥜, décrémente ton stock
// 🐷 a très faim, il en mange 8 🥜, décrémente ton stock
// 🐿️ recharge 3 🥜 de son stock d'hiver
// 🐵 te fait une blague, et cache la moitié du reste 🥜, décrémente ton stock.
// 🐘🐷🐿️ sont en colère contre 🐵. Les pauvres 🐵 devraient multiplier le stock par 3 pour se faire pardonner.

$peanutStock = 12 ;
$peanutStock = $peanutStock - 1;
$peanutStock = $peanutStock - 8;
$peanutStock = $peanutStock + 3;
$peanutStock = $peanutStock / 2;
$peanutStock = $peanutStock * 3;

echo $peanutStock;