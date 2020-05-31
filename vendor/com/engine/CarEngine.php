<?php 
namespace com\engine;

require_once 'vendor/com/vehicle/VehicleInterface.php';

use com\vehicle\EngineInterface;

class CarEngine implements EngineInterface
{
    public function start()
    {
        return 'mesin mobil dinyalakan';
    }

    public function stop()
    {
        return 'mesin mobil dimatikan';
    }
}