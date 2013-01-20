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
     * Model year (format 'YYYY')
     * @var  int
     */
    protected $_modelYear;
    /**
     * return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();

    /**
     * year getter
     * @return string
     **/
    public function getYear()
    {
        return $_modelYear;
    }

    /**
     * year setter
     * @param $value string
     **/
    public function setYear($value)
    {
        $_modelYear = $value;
    }
}
?>
