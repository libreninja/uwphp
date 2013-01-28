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
use \Vehicle\F150 as F150;

/**
* Truck class unit test code
*/
class F150Test extends \PHPUnit_Framework_TestCase
{
     /**
      * stub for mocked abstract class
      **/
     protected $_mock;

     /**
      * setup mocks for test methods
      **/
     public function setUp()
     {
         $this->_mock = new F150();

     }
     /**
      * return test values for toString method
      * @return array
      **/
     public function getToStringValues()
     {
         return array(
             array( 1999, 4 ),
             array( 2013, 2 ),
             array( 2015, 3 )
         );
     }

     /**
      * @dataProvider getToStringValues()
      */
     public function testToString( $year, $doors )
     {
         $expected = "F150( Year:" . $year 
             . ", Doors:" . $doors . " )";

         $this->_mock->setYear( $year );
         $this->_mock->setNumberOfDoors( $doors );

         $this->assertSame( $expected, $this->_mock->__toString() );
     }
    
    /**
     * Test Truck implementation of VehicleInterface::honk()
     */
    public function testHonk()
    {
        $this->assertSame( 'BHWAAA-OOOOOONK', F150::honk() );
    }

}
?>
