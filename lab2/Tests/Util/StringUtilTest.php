<?php
require "vendor/StringUtil.php";

class testIsEmptyOrNull extends PHPUnit_Framework_TestCase
{
    public function testEmpty() {
        $this->assertTrue( StringUtil::isNullOrEmpty("") );
    }
}
?>
