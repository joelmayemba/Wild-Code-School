<?php
function fold_to($distance)
{
    // Check if distance is negative
    if ($distance < 0) {
        return null;
    }

    // Initial thickness of the paper
    $thickness = 0.0001;

    // Initialize fold counter
    $folds = 0;

    // Fold the paper until its thickness exceeds the distance
    while ($thickness < $distance) {
        $thickness *= 2; // Double the thickness
        $folds++; // Increment fold counter
    }

    return $folds;
}
