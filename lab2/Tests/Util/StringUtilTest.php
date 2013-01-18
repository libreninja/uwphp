<?php
require "Vendors/autoload.php";

class testIsEmptyOrNull extends PHPUnit_Framework_TestCase
{

    /*
     * test if string is null or empty
     */
    public function testEmpty( ) {
        $this->assertTrue( StringUtil::isNullOrEmpty( '' ) );
        $this->assertTrue( StringUtil::isNullOrEmpty( null ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( 'abc' ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( 1234 ) );

    }

    /*
     * @expectedException InvalidArgumentException
     */
    public function testInvalid()
    {
        try {
            StringUtil::isNullOrEmpty( array() );
        } catch( \InvalidArgumentException $e ) {
            $this->assertSame( 'Args must be strings.', $e->getMessage() );
        }
    }
}
?>
