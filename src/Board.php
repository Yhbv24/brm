<?php
    class Board
    {
        private $name;
        private $members = [];
        private $address;
    }

    function getName()
    {
        return $this->name;
    }

    function getMembers()
    {
        return $this->members;
    }

    function getAddress()
    {
        return $this->address;
    }

    function addMember($member)
    {
        array_push($this->members, $member);
    }

    function setAddress($address)
    {
        $this->address = $address;
    }
 ?>
