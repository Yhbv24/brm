<?php
// Address class definition.  Address object is used in Contact to store, retrieve, and set a Contact's address details.
class Address
{
    // private object properties
    private $street;
    private $city;
    private $state;
    private $zip;
    // address object constructor
    function __construct($street, $city, $state, $zip)
    {
        $this->street = strtoupper($street);
        $this->city = strtoupper($city);
        $this->state = strtoupper($state);
        $this->zip = $zip;
    }
    // getter methods
    function getStreet()
    {
        return $this->street;
    }
    function getCity()
    {
        return $this->city;
    }
    function getState()
    {
        return $this->state;
    }
    function getZip()
    {
        return $this->zip;
    }

    // setter methods
    function setAddress($street, $city, $state, $zip)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }
}
?>
