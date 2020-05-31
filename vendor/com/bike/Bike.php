<?php 
namespace com\bike;

require_once 'vendor/com/vehicle/VehicleInterface.php';

use com\vehicle\VehicleInterface;

abstract class Bike implements VehicleInterface
{
    abstract public function ride();
}