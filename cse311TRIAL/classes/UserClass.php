<?php  
    require '../classes/connectionClass.php';
    class user{
        private $func;

        private $id = 'N/A';
        private $emailID = 'N/A';
        private $password = 'N/A';
        private $userName = 'N/A';
        private $name = 'N/A';
        private $height = 0.00;
        private $weight = 0.00;
        private $phoneNumber = 'N/A';
        private $address = 'N/A';
        private $bloodGroup = 'N/A';
        private $DoB = 'N/A';
        private $gender = 'N/A';

        function __construct()
        {
            
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
        function getGender(){
            return $this->gender;
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
        function getDob(){
            return $this->DoB;
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
        function setGender($gender){
            $this->gender = $gender;
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
        function setDoB($DoB){
            $this->DoB = $DoB;
        }


        //to pass the info to DB function class.php
        public function insertIntoDatabase(){
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
            
        }

        public function UpdateInfoInDatabase($id, $emailID){

            $con = new connection();
            $db = $con->connect();

            $query = "UPDATE users SET
                User_Name = '{$this->getUserName()}',
                Name = '{$this->getName()}',
                DoB = {$this->getDob()},
                Height = {$this->getHeight()},
                Weight = {$this->getWeight()},
                Phone_Number = '{$this->getPhoneNumber()}',
                Address = '{$this->getAddress()}',
                Blood_Group = '{$this->getBloodGroup()}',
                Gender = '{$this->getGender()}'
                WHERE ID = $id AND Email_ID = '$emailID'";
        }

        public function getPreviousInfo($emailID){

            $con = new connection();
            $db = $con->connect();

            $query = "SELECT * FROM users WHERE Email_ID = '{$emailID}'";

            //echo $_SESSION['emailID'];
            $result = mysqli_query($db, $query);

            $info = mysqli_fetch_array($result);
            
            $this->setId($info['ID']);
            $this->setemailId($info['Email_ID']);
            $this->setUserName($info['User_Name']);
            $this->setName($info['Name']);
            $this->setDoB($info['DoB']);
            $this->setHeight($info['Height']);
            $this->setWeight($info['Weight']);
            $this->setPhoneNumber($info['Phone_Number']);
            $this->setAddress($info['Address']);
            $this->setBloodGroup($info['Blood_Group']);
            $this->setGender($info['Gender']);
        }


    }






?>