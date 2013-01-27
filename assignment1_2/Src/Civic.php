<?php 
/**
 * Assignment 1 part 2 - uw-php-course
 *
 * @author Josh Benner
 * @version 0.1.2
 * @copyright Josh Benner, 26 January, 2013
 * @package default
 **/
namespace Src;


/**
 * derived Vehicle class modeling a Car object
 **/
class Civic extends Car implements VehicleInterface
{

    /**
     * civic brand member var
     * @var string
     **/
    private $_brand;

    /**
     * constructor
     **/
    public function __construct( $year = null )
    {
        parent::__construct( $year );

        $this->_brand = 'Honda';
    }

    /**
     * emit alert
     **/
    public function honk()
    {
        return "honk honk";
    }

}
?>
