<?php 
/**
 * Vehicle unit test code
 */
 class VehicleTest extends \PHPUnit_Framework_TestCase
 {
 	public function getYearValues()
 	{
 		return array(
 			array( 1957 ),
 			array( 2010 ),
 			array( 1234 ),
 			array( 3333 ),
 			);
 	}
 	/**
 	 * @dataProvider getYearValues()
 	 * @param  int $value year
 	 */
 	public function testGetYear($value)
 	{
 		$this->assertSame($value, Vehicle::getYear());
 	}

 }
 ?>
