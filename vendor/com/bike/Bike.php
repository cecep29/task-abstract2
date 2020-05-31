<?php 
namespace com\bike;

use com\vehicle\VehicleInterface;

abstract class Bike implements VehicleInterface
{
    abstract public function ride();
}