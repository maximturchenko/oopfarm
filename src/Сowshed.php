<?php

namespace maximturchenko\oopfarm;

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
        for($i=0;$i<$countcow;$i++){
            $animals[]=$this->farm->addCow();
        }
        for($i=0;$i<$countchicken;$i++){
            $animals[]=$this->farm->Chicken(); 
        }
    }

    public function addCow()
    {
        $animals[]=$this->farm->addCow();
    }
    public function addChiken()
    {
        $animals[]=$this->farm->addChiken();
    }

    public function collect()
    { 
        foreach($animals as $animal){
            if($animal instanceof Cow){
                $countmilk+=$animal->give();
            }
            if($animal instanceof Chicken){
                $counteggs+=$animal->give();
            }
            echo "Собрано яиц: ".$counteggs.'\n';
            echo "Собрано литров молока: ".$countmilk.'\n';
        }
    }
    
}