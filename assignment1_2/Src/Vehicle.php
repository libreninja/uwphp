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
     * constructor
     **/
    public function __construct( $year = null )
    {
        // initialize 
        if( !isset( $year ) )
        {
            $year = intval( date( 'Y' ) );
        }
        
        $this->_yearManufactured = $year;
    }

    /**
     * year of manufacture
     * @var int
     **/
    protected $_yearManufactured;

    /**
     * year getter
     * @return int
     */
    abstract protected function getYear();

    /**
     * year setter
     * @param int year
     */
    abstract protected function setYear( $value );

    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;

    /**
     * Return the number of doors
     * @return int
     */
    abstract protected function getNumberOfDoors();

    /**
     * numberOfDoors setter
     * @param int count of doors
     */
    abstract protected function setNumberOfDoors( $value );

    public function __toString()
    {
        $desc = get_class( $this ) . "( Year:" . $this->getYear()
            . ", Doors:" . $this->getNumberOfDoors() . " )";

        return $desc;
    
    }
}
?>
