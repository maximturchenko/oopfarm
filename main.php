<?php

require __DIR__ . '/vendor/autoload.php';
  

$farm = new \oopfarm\Farm();
$cowshed = new \oopfarm\Сowshed($farm);

$cowshed->collect();

 