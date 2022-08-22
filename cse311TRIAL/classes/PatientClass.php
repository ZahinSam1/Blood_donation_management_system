<?php 
    require 'UserClass.php';

    class patient extends user{

        private $disease = 'N/A';
        function __construct($name, $age, $bloodGroup){
            $this->setName($name);
            $this->setAge($age);
            $this->setBloodGroup($bloodGroup);
        }

        //getters
        function getDisease(){
            return $this->disease;
        }

        //setters
        function setDisease($disease){
            $this->disease = $disease;
        }

        function __destruct()
        {
            
        }
    }






?>