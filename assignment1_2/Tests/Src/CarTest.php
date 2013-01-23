<?php 
namespace Tests\Src;
use \Src\Car as Car;

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
