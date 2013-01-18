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
        if( is_array( $value ) && 0 === count( $value ) ) {
            throw new \InvalidArgumentException( 'Args must be strings.' );
        }

        if( null === $value || "" === $value ) {
            return true;
        }

        return false;
    }
}
?>
