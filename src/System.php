<?php

namespace oopfarm;

use oopfarm\Farm;

class System{

    private $cowshed;
    private $col = 0;

    public function __construct(Сowshed $cowshed)
    {
        $this->cowshed = $cowshed;   
    }

    public function addAnimal(Farm $farm)
    {        
        $this->cowshed->addAnimal($farm->create());
    }

    public function collect(string $an)
    { 
        $this->col = 0;
        $animals = $this->cowshed->getAnimals(); 
        foreach($animals as $animal){
            if($animal->name == $an){
                $this->col+=$animal->give();
            }                
        }  
        return $this->col;
    }
}