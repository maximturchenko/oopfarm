<?php

namespace oopfarm;

class FarmChicken implements Farm{
    public function create(){
        return new Chicken();
    }
}