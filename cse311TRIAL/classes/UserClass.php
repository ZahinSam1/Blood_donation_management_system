<?php 
    require 'DBFunctionClass.php';
    
    class user{
        private $func;

        private $id = 'N/A';
        private $emailID = 'N/A';
        private $password = 'N/A';
        private $userName = 'N/A';
        private $name = 'N/A';
        private $age = 'N/A';
        private $height = 'N/A';
        private $weight = 'N/A';
        private $phoneNumber = 'N/A';
        private $address = 'N/A';
        private $bloodGroup = 'N/A';

        function __construct()
        {
            $func = new DBFunctions();
        }

        //gettters
        function getId(){
            return $this->id;
        }
        function getemailID(){
            return $this->emailID;
        }
        function getPassword(){
            return $this->password;
        }
        function getUserName(){
            return $this->userName;
        }
        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        function getHeight(){
            return $this->height;
        }
        function getWeight(){
            return $this->weight;
        }
        function getPhoneNumber(){
            return $this->phoneNumber;
        }
        function getAddress(){
            return $this->address;
        }
        function getBloodGroup(){
            return $this->bloodGroup;
        }

        //setters
        function setId($id){
            $this->id = $id;
        }
        function setemailId($emailID){
            $this->emailID = $emailID;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function setUserName($userName){
            $this->userName = $userName;
        }
        function setName($name){
            $this->name = $name;
        }
        function setAge($age){
            $this->age = $age;
        }
        function setHeight($height){
            $this->height = $height;
        }
        function setWeight($weight){
            $this->weight = $weight;
        }
        function setPhoneNumber($phoneNumber){
            $this->phoneNumber = $phoneNumber;
        }
        function setAddress($address){
            $this->address = $address;
        }
        function setBloodGroup($bloodGroup){
            $this->bloodGroup = $bloodGroup;
        }


        //to pass the info to DB function class.php
        public function insertIntoDatabase(){
            
            $this->func->userRegister($this->getUserName(),
                $this->getemailID(), $this->getPassword(),
                $this->getName(), $this->getAge(), $this->getHeight(),
                $this->getWeight(), $this->getPhoneNumber(),
                $this->getAddress(), $this->getBloodGroup()
            );
        }

        public function UpdateInfoInDatabase(){
            $this->func->updateInfo(
                $this->getUserName(),
                $this->getPassword(),
                $this->getName(), $this->getAge(), $this->getHeight(),
                $this->getWeight(), $this->getPhoneNumber(),
                $this->getAddress(), $this->getBloodGroup()
                );
        }



        function __destruct()
        {
            
        }
    }






?>