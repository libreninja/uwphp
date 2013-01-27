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

require_once 'Car.php';
require_once 'VehicleInterface.php';

/**
 * derived Vehicle class modeling a Car object
 **/
class Civic extends Car implements VehicleInterface
{
    /**
     * emit alert
     **/
    public function honk()
    {
        return "";
    }

}
?>
