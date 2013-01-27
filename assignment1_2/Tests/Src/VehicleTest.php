<?php 
namespace Tests\Src;


/**
 * Vehicle unit test code
 */
 class VehicleTest extends \PHPUnit_Framework_TestCase
 {
     /**
      * unit test for string representation of Vehicle
      */
     public function testToString()
     {
         $stub = $this->getMockForAbstractClass( '\Src\Vehicle' );
         $stub->expects( $this->any() )
             ->method( 'getYear' )
             ->will( $this->returnValue( 1993 ) );

         $stub->expects( $this->any() )
             ->method( 'getNumberOfDoors' )
             ->will( $this->returnValue( 4 ) );

         echo $stub->__toString();
         $this->assertSame( 'Vehicle( Year:1993, Doors:4 )', $stub->__toString() );
     }

 }
 ?>
