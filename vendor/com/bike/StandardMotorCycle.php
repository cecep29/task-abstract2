<?php 

namespace com\bike;

use com\bike\Bike;
use com\engine\MotorCycleEngine;

class StandardMotorCycle extends Bike 
{
    private $motor_cycle_engine;

    public function __construct(MotorCycleEngine $motor_cycle_engine)
    {
        $this->motor_cycle_engine = $motor_cycle_engine;
    }

    public function ride()
    {
        return 'Motor standard dikendarai';
    }

    public function run()
    {
        return 'Motor standard jalan';
    }

    public function getEngineStart()
    {
        return $this->motor_cycle_engine->start();
    }

    public function getEngineStop()
    {
        return $this->motor_cycle_engine->stop();
    }
}