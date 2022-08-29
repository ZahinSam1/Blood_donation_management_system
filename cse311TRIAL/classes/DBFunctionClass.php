<?php
    //session_start();
    require 'connectionClass.php';
    

    
    class DBFunctions extends connection{
        
        function __construct()
        {
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
        public function userRegister($userName, $emailID, $password){
            $db = $this->connect();
            $password = md5($password);
            //$lastEntry = $this->lastEntry() + 1;
            $query = "INSERT INTO users(Email_ID, Password, User_Name) VALUES(\'$emailID\', \'$password\', \'$userName\')";

            $result = mysqli_query($db, $query) or die(mysqli_error($this->db));

            return $result;
            // if(mysqli_query($this->db, $query)){
            //     echo "<script>alert('Register Successful')</script>";
            // }else{
            //     die(mysqli_error($this->db));
            // }
        }

        //function to excecute Update task
        public function updateInfo($userName, $emailID, $password, $name, $DoB, $height, $weight, $phonenumber, $address, $bloodgroup){
            $query = "UPDATE users SET 
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
        public function login($username, $password){
            $db = $this->connect(); 
            $query = "SELECT * FROM users WHERE User_Name = '$username' AND Password = 'md5($password)'";
            $result = mysqli_query($db, $query);

            $user_data = mysqli_fetch_array($result);
            $no_row = mysqli_num_rows($result);

            if($no_row == 1){
                // $_SESSION['login'] = true;
                // $_SESSION['uid'] = $user_data['ID'];
                // $_SESSION['username'] = $user_data['User_Name'];
                // $_SESSION['email'] = $user_data['Email_ID'];
                return true;
            }else{
                return false;
            }

        }

        public function isUserExist($emailID){
            $db = $this->connect();
            $query = "SELECT * FROM users WHERE Email_ID = $emailID";
            $result = mysqli_query($db, $query);
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