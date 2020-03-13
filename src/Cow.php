<?php

namespace oopfarm;

class Cow extends Animal{ 

    public $name = 'Cow';
    private $milk;
    private static $counter=0; 
    
    public function __construct()
    {
        self::$counter++;
        $this->regid=self::$counter;       
    }

    public function give()
    {
        $this->milk = rand(8,12);
        return $this->milk; 
    }  
   
}