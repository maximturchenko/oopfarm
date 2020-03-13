<?php

namespace oopfarm;

class Сowshed{
    private $farm;
    public $countcow = 10;
    private $countmilk = 0;
    public $countchicken = 20;
    private $counteggs = 0;
    private $animals=[];

    public function __construct(Farm $farm)
    {
        $this->farm = $farm;
        for($i=0;$i<$this->countcow;$i++){
            $this->animals[]=$this->farm->addCow();
        }
        for($i=0;$i<$this->countchicken;$i++){
            $this->animals[]=$this->farm->addChiken(); 
        }
    }

    public function addCow()
    {
        $this->animals[]=$this->farm->addCow();
    }
    public function addChiken()
    {
        $this->animals[]=$this->farm->addChiken();
    }

    public function collect()
    { 
        foreach($this->animals as $animal){
            if($animal instanceof Cow){
                $this->countmilk+=$animal->give();
            }
            if($animal instanceof Chicken){
                $this->counteggs+=$animal->give();
            }            
        }           
        echo "Собрано яиц: ".$this->counteggs;
        echo "\n";
        echo "Собрано молока: ".$this->countmilk. " (литров)";     
    }
}