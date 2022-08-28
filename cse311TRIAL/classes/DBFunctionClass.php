<?php
    require_once 'connectionClass.php';
    session_start();

    class DBFunctions {
        private $db;
        function __construct()
        {
            $db = new connection();
        }

        function __destruct()
        {
            
        }
        //function to get the last entry for ID
        private function lastEntry(){
            $query = "SELECT MAX(ID) FROM Users";
            $result = mysqli_query($this->db, $query);
            $row = mysqli_fetch_array($result);
            $lastEntry = 0;
            if($row!=0){
                $lastEntry = $row['ID'];
            }else{
                $lastEntry = 0;
            }
            return $lastEntry;
        }

        //function to excecute Register task
        public function userRegister($userName, $emailID, $password, $name, $DoB, $height, $weight, $phonenumber, $address, $bloodgroup){
            $password = md5($password);
            $lastEntry = $this->lastEntry() + 1;
            $query = "INSERT INTO 
                    Users(ID, Email_ID, Password,
                    User_Name, Name, DoB, Height,
                    Weight, Phone_Number, Address,
                    Blood_Group)
                    VALUES($lastEntry, '$emailID', $password, $userName,
                    '$name', $DoB, $height, $weight, '$phonenumber',
                    '$address', '$bloodgroup')";

            $result = mysqli_query($this->db, $query) or die(mysqli_error($this->db));

            return $result;
        }

        //function to excecute Update task
        public function updateInfo($userName, $emailID, $password, $name, $DoB, $height, $weight, $phonenumber, $address, $bloodgroup){
            $query = "UPDATE Users SET 
                Password= $password,
                User_Name = $userName,
                Name = '$name',
                Age = $DoB,
                Height = $height,
                Weight = $weight,
                Phone_Number = $phonenumber,
                Address = $address,
                Blood_Group = $bloodgroup
                WHERE Email_ID = '$emailID'";
        }
        //function to excecute login task
        public function login($emailID, $password){
            
            $query = "SELECT * FROM users WHERE Email_ID = '$emailID' AND Password = 'md5($password)'";
            $result = mysqli_query($this->db, $query);

            $user_data = mysqli_fetch_array($result);
            $no_row = mysqli_num_rows($result);

            if($no_row == 1){
                $_SESSION['login'] = true;
                $_SESSION['uid'] = $user_data['ID'];
                $_SESSION['username'] = $user_data['User_Name'];
                $_SESSION['email'] = $user_data['Email_ID'];
                return true;
            }else{
                return false;
            }

        }

        public function isUserExist($emailID){
            $query = "SELECT * FROM Users WHERE Email_ID = $emailID";
            $result = mysqli_query($this->db, $query);
            $row = mysqli_num_rows($result);
            echo $row;
            if($row > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getUserInfo($emailID){
            $query = "SELECT * FROM Users WHERE Email_ID = $emailID";
            $result = mysqli_query($this->db, $query);
            $row = mysqli_fetch_array($result);
            return $row;
        }

    }

?>