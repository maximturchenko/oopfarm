<?php

require __DIR__ . '/vendor/autoload.php';
  
$cow='Cow';
$chicken='Chicken'; 
  
$farmchicken = new \oopfarm\FarmChicken();
$farmcow = new \oopfarm\FarmCow(); 

$cowshed = new \oopfarm\Сowshed();
$system = new \oopfarm\System($cowshed);
 

$colCow = 10;
$colChicken= 20;

for($i=0;$i<$colCow;$i++){
    $system->addAnimal($farmcow);
}
for($i=0;$i<$colChicken;$i++){
    $system->addAnimal($farmchicken);
}
 
$milk = $system->collect($cow);
$egg = $system->collect($chicken);


echo "Собрано яиц: ".$egg;
echo "\n";
echo "Собрано молока: ".$milk; 
echo "\n";

 