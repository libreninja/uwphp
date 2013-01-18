<?php 
require_once 'Car.php';
require_once 'VehicleInterface.php';

/**
* A derived vehicle object
*/
class Civic extends Car implements VehicleInterface
{
    /**
     * return number of vehicle doors
     */
	public function getNumberOfDoors()
	{
		return 3.14159;
	}

    /**
     * implement VehicleInterface::honk method
     */
	public function honk()
	{
		return 'honk honk';
	}
}
?>
