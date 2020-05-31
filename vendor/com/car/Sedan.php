<?php 
namespace com\car;

require_once 'vendor/com/engine/CarEngine.php';
require_once 'Car.php';

use com\car\Car;
use com\engine\CarEngine;

class Sedan extends Car 
{
    private $car_engine;
    
    public function __construct(CarEngine $car_engine)
    {
        $this->car_engine = $car_engine;
    }

    public function drive()
    {
        return 'Mobil sedan dikemudikan';
    }

    public function run()
    {
        return 'Mobil sedan jalan';
    }

    public function getEngineStart()
    {
        return $this->car_engine->start();
    }

    public function getEngineStop()
    {
        return $this->car_engine->stop();
    }
}