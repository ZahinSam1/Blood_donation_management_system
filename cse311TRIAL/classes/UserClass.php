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
            
            $this->func->userRegister($this->getUserName(),
                $this->getemailID(), $this->getPassword(),
                $this->getName(), $this->getDob(), $this->getHeight(),
                $this->getWeight(), $this->getPhoneNumber(),
                $this->getAddress(), $this->getBloodGroup()
            );
        }

        public function UpdateInfoInDatabase(){
            $this->func->updateInfo(
                $this->getUserName(),
                $this->getPassword(),
                $this->getName(), $this->getDob(), $this->getHeight(),
                $this->getWeight(), $this->getPhoneNumber(),
                $this->getAddress(), $this->getBloodGroup()
                );
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

        public function popUpMsg($message){
            echo '<script type="text/javascript">';
            echo 'delete window.alert;';
            echo ' alert("$message");';
            echo '</script>';
        }

    }






?>