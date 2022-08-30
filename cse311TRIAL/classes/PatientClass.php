<?php 
    require 'UserClass.php';

    class patient extends user{

        private $disease = 'N/A';
        private $recieveLocation = 'N/A';
        private $user;
        function __construct(){
            
        }

        //getters
        function getDisease(){
            return $this->disease;
        }
        function getRecieveLoc(){
            return $this->recieveLocation;
        }

        //setters
        function setDisease($disease){
            $this->disease = $disease;
        }
        function setRecieveLocation($location){
            $this->recieveLocation = $location;
        }

        public function PinsertIntoDatabase(){
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

            $query = "SELECT ID FROM users WHERE Name = '{$this->getName()}' AND Phone_Number= '{$this->getPhoneNumber()}'";
            $result = mysqli_query($db, $query);
            $info = mysqli_fetch_array($result);

            $P_ID = $info['ID'];

            $query = "INSERT INTO patient(U_ID, Disease, Recieve_Location) VALUES ($P_ID, '{$this->getDisease()}', '{$this->getRecieveLoc()}' )";
            mysqli_query($db, $query);

            
        }
    }






?>