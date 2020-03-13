<?php

namespace oopfarm;

class FarmCow implements Farm{
    public function create(){
        return new Cow();
    }
}