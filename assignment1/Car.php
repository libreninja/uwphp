<?php 
/**
 * A derived vehicle class
 */
require_once 'Vehicle.php';
require_once 'VehicleInterface.php';

/**
* A derived vehicle object
*/
class Car extends Vehicle implements VehicleInterface
{
    /**
     * return number of doors
     */
	public function getNumberOfDoors()
	{
		return 3;
	}

    /**
     * implement VehicleInterface method
     */
	public function honk()
	{
		return "";
	}
}
?>
