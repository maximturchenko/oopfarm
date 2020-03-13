<?php

namespace oopfarm;

class Сowshed{
    private $animals=[];

    public function __construct()
    { 
        echo "Хлев открыт";
        echo "\n";
    }
    public function getAnimals(){
        return $this->animals;
    }
    public function addAnimal($animal){
        $this->animals[] = $animal;
    }
}