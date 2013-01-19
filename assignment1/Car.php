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
     **/
    public function getNumberOfDoors()
    {
        return 3;
    }

    /**
     * emit alert
     **/
    public function honk()
    {
        return "";
    }

    /**
     * year getter
     * @return string
     **/
    public function getYear()
    {
        return $_year;
    }

    /**
     * year setter
     * @param $value string
     **/
    public function setYear($value)
    {
        $_year = $value;
    }
}
?>
