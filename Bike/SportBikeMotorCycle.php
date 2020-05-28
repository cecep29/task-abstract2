<?php 

namespace Bike;

use Bike;
use Engine\MotorCycleEngine;

class SportBikeMotorCycle extends Bike 
{
    private $motor_cycle_engine;
    private $str = __METHOD__.' '.__CLASS__;

    public function __construct(MotorCycleEngine $motor_cycle_engine)
    {
        $this->motor_cycle_engine = $motor_cycle_engine;
    }

    public function ride()
    {
        return $this->str;
    }

    public function run()
    {
        return $this->str;
    }
}