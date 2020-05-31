<?php 

namespace com\bike;

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

