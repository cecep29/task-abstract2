<?php 

namespace com\bike;

require_once 'Bike.php';

use com\bike\Bike;

class Bicycle extends Bike 
{
   
    public function ride()
    {
        return 'Sepeda dikendarai';
    }

    public function run()
    {
        return 'sepeda jalan';
    }
}

