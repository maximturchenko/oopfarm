<?php

namespace oopfarm;

class Cow{

    private $regid;
    private static $counter=0;
    private $milk;
    
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