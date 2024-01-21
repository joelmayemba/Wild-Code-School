<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal('Lion', 2.06, true, 4, 'VU');
$parrot = new Animal('Parrot', 0.81, false, 2, 'LC');
$seal = new Animal('Seal', 7, false, 2, 'EN');

$animals = [$lion,$parrot,$seal];

var_dump($animals);



/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>