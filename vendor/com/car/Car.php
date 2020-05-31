<?php 

namespace com\car;

use com\vehicle\VehicleInterface;

abstract class Car implements VehicleInterface
{
    abstract public function drive();
}