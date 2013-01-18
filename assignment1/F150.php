<?php
require_once 'Truck.php';

/**
 * Derived truck object.
 */
class F150 extends Truck implements VehicleInterface
{
    
    /**
     * @brief return number of doors
     */
    public function getNumberOfDoors()
    {
        return "half";
    }

    /**
     * raise alert noise
     */
    public function honk()
    {
        return "beep";
    }
}
?>
