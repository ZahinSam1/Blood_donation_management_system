<?php
    include "UserClass.php";

    class Donor extends user{
        //private $donorName;
        private $condition;
        
        function __construct($name)
        {
            $this->setName($name);

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