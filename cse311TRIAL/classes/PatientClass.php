<?php 
    require 'UserClass.php';

    class patient extends user{

        private $disease = 'N/A';
        private $user;
        function __construct(){
            
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