<?php 

/**
* Abstract class to represent vehicle
*/
abstract class Vehicle
{
	/**
	 * Number of doors
	 * @var  int
	 */
	protected $_numberOfDoors;

	/**
	 * return the number of doors
	 * @return int
	 */
	abstract public function getNumberOfDoors();
}
?>
