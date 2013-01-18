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
        if( is_array( $value ) ) {
            throw new \InvalidArgumentException( 'Args must be strings.' );
        }

        if( !isset($value) || empty($value) ) {
            return true;
        }

        return false;
    }
}
?>
