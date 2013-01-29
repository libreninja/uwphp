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

/**
 * Vehicle unit test code
 */
 class VehicleTest extends \PHPUnit_Framework_TestCase
 {
     /**
      * stub for mocked abstract class
      **/
     protected $_stub;

     /**
      * setup mocks for test methods
      **/
     public function setUp()
     {
         $this->_stub = $this->getMockForAbstractClass( '\Vehicle\Vehicle' );

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
         $expected = get_class( $this->_stub ) 
             . "( Year:" . $year 
             . ", Doors:" . $doors . " )";

         $this->_stub
             ->expects( $this->any() )
             ->method( 'getYear' )
             ->will( $this->returnValue( $year ) );

         $this->_stub
             ->expects( $this->any() )
             ->method( 'getNumberOfDoors' )
             ->will( $this->returnValue( $doors ) );

         $this->assertSame( $expected, $this->_stub->__toString() );
     }

 }
 ?>
