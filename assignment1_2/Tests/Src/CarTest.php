<?php 
/**
 * Assignment 1 part 2 - uw-php-course
 *
 * @author Josh Benner
 * @version 0.1.2
 * @copyright Josh Benner, 26 January, 2013
 * @package default
 **/
namespace Tests\Src;
use \Vehicle\Car as Car;

/**
* Car class unit test code
*/
class CarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Car implementation of VehicleInterface::honk()
     */
    function testHonk()
    {
        $this->assertSame( '', Car::honk() );
    }
}
?>
