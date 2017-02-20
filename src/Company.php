<?php
    class company
    {
        private $name;
        private $address;
        private $size;
        private $number_emps;
        private $employees = [];

        function __construct($name, $address, $size)
        {
            $this->name = $name;
            $this->address = $address;
            $this->size = $size;
        }

        function getName()
        {
            return $this->name;
        }

        function getAddress()
        {
            return $this->address;
        }

        function getSize()
        {
            return $this->size;
        }

        function getNumEmps()
        {
            return $this->number_emps;
        }

        function getEmployees()
        {
            return $this->employees;
        }

        function setAddress($addr)
        {
            $this->address = $addr;
        }

        function addEmployee($employee)
        {
            array_push($this->employees, $employee);
        }

        // function removeEmployee($employee)
        // {
        //
        // }
    }
 ?>
