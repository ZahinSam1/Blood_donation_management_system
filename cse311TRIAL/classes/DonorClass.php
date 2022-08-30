<?php
    require "UserClass.php";

    class Donor extends user{
        private $condition;
        private $donateDate;
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

        public function DinsertIntoDatabase(){
            $con = new connection();
            $db = $con->connect();
            $query = "INSERT INTO users(Email_ID, User_Name, Name, DoB, Height, Weight, Phone_Number, Address, Blood_Group, Gender) 
            VALUES('{$this->getemailID()}',
            '{$this->getUserName()}',
            '{$this->getName()}',
            '{$this->getDob()}',
             {$this->getHeight()},
             {$this->getWeight()},
            '{$this->getPhoneNumber()}',
            '{$this->getAddress()}',
            '{$this->getBloodGroup()}',
            '{$this->getGender()}')";

            mysqli_query($db, $query);
            
        }

    }

?>