<?php
require "Vendors/autoload.php";

class testIsEmptyOrNull extends PHPUnit_Framework_TestCase
{
    public function testEmpty() {
        $this->assertTrue( StringUtil::isNullOrEmpty( null ) );
        $this->assertTrue( StringUtil::isNullOrEmpty( '' ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( 'abc' ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( 1234 ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( array() ) );
    }
}
?>
