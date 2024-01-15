<?php
// public/index.php

require __DIR__ . '../src/Animal.php';

$lion = new Animal('Lion', 2.06, true, 4, 'VU');
$animal2 = new Animal();

var_dump($lion);
