<?php
// public/index.php

require __DIR__ . '../src/Animal.php';

$lion = new Animal('Lion', 2.06, true, 4, 'VU');
$parrot = new Animal('Scarlet Macaw', 0.81, false, 2, 'LC');
$seal = new Animal('Hawaiian Monk Seal', 7, false, 2, 'EN');

var_dump($lion) .PHP_EOL;
var_dump($parrot) .PHP_EOL;
var_dump($seal) .PHP_EOL;
