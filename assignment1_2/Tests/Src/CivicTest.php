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
 * Civic unit test code
 */
 class CivicTest extends \PHPUnit_Framework_TestCase
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
         $this->_mock = new \Vehicle\Civic();

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
         $expected = "Civic( Year:" . $year 
             . ", Doors:" . $doors . " )";

         $this->_mock->setYear( $year );
         $this->_mock->setNumberOfDoors( $doors );

         $this->assertSame( $expected, $this->_mock->__toString() );
     }

     /**
      * Test Car implementation of VehicleInterface::honk()
      */
     function testHonk()
     {
         $this->assertSame( 'honk honk', $this->_mock->honk() );
     }

 }
 ?>
