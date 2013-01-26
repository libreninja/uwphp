<?php
namespace Src;
/**
 * Abstract class to represent vehicle
 */
abstract class Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;

    /**
     * Return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();

    /**
     * year setter
     * @param int year
     */
    public function setYear( $value )
    {
        $this->_year = $value;
    }

    /**
     * year getter
     * @return int
     */
    public function getYear()
    {
        return $this->_year;
    }
}
?>
