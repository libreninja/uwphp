<?php
/**
 * Assignment 1 part 2 - uw-php-course
 *
 * @author Josh Benner
 * @version 0.1.2
 * @copyright Josh Benner, 26 January, 2013
 * @package default
 **/
namespace Src;

use \Src\Vehicle as Vehicle;
use \Src\VehicleInterface as VehicleInterface;
//require_once 'Vehicle.php';
//require_once 'VehicleInterface.php';

/**
 * derived Vehicle class modeling a Car object
 **/
class Car extends Vehicle implements VehicleInterface
{
    /**
     * VehicleInterface honk method
     *
     * @returns string
     **/
    public function honk()
    {
        return "";
    }

    /**
     * number of doors getter
     * @return int
     **/
    public function getNumberOfDoors()
    {
        return $this->_numberOfDoors;
    }

    /**
     * number of doors setter
     * @param int
     **/
    public function setNumberOfDoors( $value )
    {
        return $this->_numberOfDoors = $value;
    }

    /**
     * year getter
     * @return int
     **/
    public function getYear()
    {
        return $this->_yearManufactured;
    }

    /**
     * year setter
     * @param int
     **/
    public function setYear( $value )
    {
        return $this->_yearManufactured = $value;
    }
}
?>
