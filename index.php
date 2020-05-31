<?php 

require_once 'loader/SplClassLoader.php';

$loader = new SplClassLoader('com',__DIR__. '/vendor');
$loader->register();


use com\engine\MotorCycleEngine;
use com\bike\Bicycle;
use com\bike\SportBikeMotorCycle;
use com\bike\StandardMotorCycle;

use com\engine\CarEngine;
use com\car\Sedan;
use com\car\Truck;

$engine = new MotorCycleEngine();

$bicycle = new Bicycle();
echo $bicycle->ride();
echo PHP_EOL;
echo $bicycle->run();
echo PHP_EOL;
echo PHP_EOL;


$ducati = new SportBikeMotorCycle($engine);
echo $ducati->getEngineStart();
echo PHP_EOL;
echo $ducati->ride();
echo PHP_EOL;
echo $ducati->run();
echo PHP_EOL;
echo $ducati->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$supra = new StandardMotorCycle($engine);
echo $supra->getEngineStart();
echo PHP_EOL;
echo $supra->ride();
echo PHP_EOL;
echo $supra->run();
echo PHP_EOL;
echo $supra->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$engine_car = new CarEngine();

$vios = new Sedan($engine_car);
echo $vios->getEngineStart();
echo PHP_EOL;
echo $vios->drive();
echo PHP_EOL;
echo $vios->run();
echo PHP_EOL;
echo $vios->getEngineStop();
echo PHP_EOL;
echo PHP_EOL;

$fuso = new Truck($engine_car);
echo $fuso->getEngineStart();
echo PHP_EOL;
echo $fuso->drive();
echo PHP_EOL;
echo $fuso->run();
echo PHP_EOL;
echo $fuso->getEngineStop();
echo PHP_EOL;




