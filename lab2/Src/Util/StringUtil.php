<?php
/**
 * String Utility object
 */
class StringUtil
{
    /**
     * @brief return whether string input is null or empty
     */
    public static function isNullOrEmpty( $value ) {
        if( !isset($value) || empty($value) ) {
            return true;
        }

        return false;
    }
}
?>
