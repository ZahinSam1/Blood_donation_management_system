<?php
    include "UserClass.php";

    class Donor extends user{
        //private $donorName;
        private $condition;
        
        function __construct()
        {

        }

        //getters
        function getConditionStatus(){
            return $this->condition;
        }

        //setters
        function setConditionStatus($condition){
            $this->condition = $condition;
        }

        function __destruct()
        {
            
        }

    }

?>