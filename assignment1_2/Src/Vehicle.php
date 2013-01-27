<?php
/**
 * Assignment 1 part 2 - uw-php-course
 *
 * @author Josh Benner
 * @version 0.1.2
 * @copyright Josh Benner, 26 January, 2013
 * @package ???
 **/
namespace Src;

/**
 * base vehicle class
 *
 * @package Src
 * @author Josh Benner
**/
abstract class Vehicle
{
    /**
     * year of manufacture
     * @var int
     **/
    protected $_yearManufactured;

    /**
     * year getter
     * @return int
     */
    protected function getYear()
    {
        return $this->_yearManufactured;
    }

    /**
     * year setter
     * @param int year
     */
    protected function setYear( $value )
    {
        $this->_yearManufactured = $value;
    }

    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;

    /**
     * Return the number of doors
     * @return int
     */
    protected function getNumberOfDoors()
    {
        return $this->_numberOfDoors;
    }

    /**
     * numberOfDoors setter
     * @param int count of doors
     */
    protected function setNumberOfDoors( $value )
    {
        $this->_numberOfDoors = $value;
    }


}
?>
