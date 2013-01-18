<?php
require "Vendors/autoload.php";

class testIsEmptyOrNull extends PHPUnit_Framework_TestCase
{

    /*
     * test if string is null or empty
     */
    public function testEmpty( ) {
        $this->assertTrue( StringUtil::isNullOrEmpty( '' ) );
        $this->assertTrue( StringUtil::isNullOrEmpty( NULL ) );
        $this->assertFalse( StringUtil::isNullOrEmpty( 'abc' ) );

    }

}
?>
