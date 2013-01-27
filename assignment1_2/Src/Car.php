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

require_once 'Vehicle.php';
require_once 'VehicleInterface.php';

/**
 * derived Vehicle class modeling a Car object
 **/
class Car extends Vehicle implements VehicleInterface
{
    
    /**
     * constructor
     **/
    public function __construct( $year )
    {
        // initialize 
        if( !isset( $year ) )
        {
            $year = int( date( 'Y' ) );
        }
        
        $this->_yearManufactured = $year;
    }

    /**
     * VehicleInterface honk method
     *
     * @returns string
     **/
    public function honk()
    {
        return "";
    }
}
?>
