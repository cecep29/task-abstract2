<?php 
namespace Bike;

use Vehicle\VehicleInterface;

abstract class Bike implements VehicleInterface
{
    abstract public function ride();
}