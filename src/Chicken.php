<?php

namespace oopfarm;

class Chicken extends Animal{ 
     
    public $name = 'Chicken';
    private $egg;
    private static $counter=0; 
    
    public function __construct()
    {
        self::$counter++;
        $this->regid=self::$counter; 
    }

    public function give()
    {
        $this->egg = rand(0,1);
        return $this->egg; 
    }   
}