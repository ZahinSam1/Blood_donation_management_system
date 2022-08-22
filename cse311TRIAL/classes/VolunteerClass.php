<?php
    include "AdminClass.php";

    class Volunteer extends Admin{

        private $salary = 'N/A';
        function __construct($name)
        {
            $this->setName($name);
            $this->setCanAuthorizeAdmin(false);
            $this->setCanTrackAllInfo(false);
        }

        //getters
        function getSalary(){
            return $this->salary;
        }
        //setters
        function setSalary($salary){
            $this->salary = $salary;
        }

        function __destruct()
        {
            
        }
    }

?>