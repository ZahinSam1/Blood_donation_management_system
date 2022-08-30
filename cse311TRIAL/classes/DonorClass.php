<?php
    include "UserClass.php";

    class Donor extends user{
        //private $donorName;
        private $condition;
        private $donateDate;
        private $user;
        function __construct()
        {
        }

        //getters
        function getConditionStatus(){
            return $this->condition;
        }
        function getDonateDate(){
            return $this->donateDate;
        }

        //setters
        function setConditionStatus($condition){
            $this->condition = $condition;
        }
        function setDonateDate($donateDate){
            $this->donateDate = $donateDate;
        }

        function __destruct()
        {
            
        }

    }

?>