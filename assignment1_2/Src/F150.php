<?php
require_once 'Truck.php';

/**
 * Derived truck object.
 */
class F150 extends Truck implements VehicleInterface
{
    /**
     * return number of doors
     **/
    public function getNumberOfDoors()
    {
        return 3;
    }

    /**
     * emit alert
     **/
    public function honk()
    {
        return "";
    }
}
?>
