<?php

namespace maximturchenko\oopfarm;


class Chicken{

    private $regid;
    private static $counter=0;
    private $egg;
    
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