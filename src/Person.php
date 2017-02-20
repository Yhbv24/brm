<?php

class Person
{
    private $first;
    private $last;
    // company object stored
    private $company;
    // address object stored
    private $address;
    // board object stored
    private $board;

    function __construct($f_name, $l_name)
    {
        $this->first = $f_name;
        $this->last = $l_name;
    }

    function getFirst()
    {
        return $this->first;
    }

    function getLast()
    {
        return $this->last;
    }

    function getCompany()
    {
        return $this->company;
    }

    function getAddress()
    {
        return $this->address;
    }

    function getBoard()
    {
        return $this->board;
    }

    function setLast($l_name)
    {
        $this->last = $l_name;
    }

    function setCompany($c_name)
    {
        $this->company = $c_name;
    }

    function setAddress($addr)
    {
        $this->address = $addr;
    }

    function setBoard($board)
    {
        $this->board = $board;
    }

}



?>
