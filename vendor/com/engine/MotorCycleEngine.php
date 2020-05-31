<?php 

namespace com\engine;

use com\vehicle\EngineInterface;

class MotorCycleEngine implements EngineInterface
{
    public function start()
    {
        return 'mesin motor jalan';
    }

    public function stop()
    {
        return 'mesin motor stop';
    }
}









