<?php 

namespace com\car;

require_once 'vendor/com/vehicle/VehicleInterface.php';

use com\vehicle\VehicleInterface;

abstract class Car implements VehicleInterface
{
    abstract public function drive();
}