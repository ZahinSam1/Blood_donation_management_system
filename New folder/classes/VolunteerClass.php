<?php
    include "AdminClass.php";

    class Volunteer extends Admin{

        private $salary = 'N/A';
        private $user;
        function __construct()
        {
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