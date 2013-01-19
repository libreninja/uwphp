<?php 
require_once 'Car.php';
require_once 'VehicleInterface.php';

/**
* A derived vehicle object
*/
class Civic extends Car implements VehicleInterface
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
