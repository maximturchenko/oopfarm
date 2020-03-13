<?php

namespace oopfarm;

class Farm{
    public function addCow(){
        return new Cow();
    }
    public function addChiken(){
        return new Chicken();
    }    
}