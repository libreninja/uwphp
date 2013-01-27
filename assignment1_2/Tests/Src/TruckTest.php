<?php 
/**
 * Assignment 1 part 2 - uw-php-course
 *
 * @author Josh Benner
 * @version 0.1.2
 * @copyright Josh Benner, 26 January, 2013
 * @package ???
 **/
namespace Tests\Src;
use \Src\Truck as Truck;

/**
* Truck class unit test code
*/
class TruckTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Test Truck implementation of VehicleInterface::honk()
     */
    public function testHonk()
    {
        $this->assertSame( '', Truck::honk() );
    }

}
?>
