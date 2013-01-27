<?php 
namespace Tests\Src;
use \Src\Car as Vehicle;

/**
 * Vehicle unit test code
 */
 class VehicleTest extends \PHPUnit_Framework_TestCase
 {
     /**
      * @var int
      **/
     protected $_testVehicle;

     public function getYearValues()
     {
         return array(
             array( 1957 ),
             array( 2010 ),
             array( 1234 ),
             array( 3333 )
             );
     }

     protected function setUp()
     {
     }

     /**
      * @dataProvider getYearValues()
      * @param  int $value year
      */
     public function testGetYear($value)
     {
         $this->assertSame($value, $this->_vehicle->getYear());
     }

 }
 ?>
