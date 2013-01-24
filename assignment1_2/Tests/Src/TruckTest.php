<?php 
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
	function testHonk()
	{
		$this->assertSame( '', Truck::honk() );
	}
}
?>
