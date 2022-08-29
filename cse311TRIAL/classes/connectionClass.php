<?php
    require_once 'config.php';
    class connection{
        function __construct()
        {

        }

        public function connect(){
            $db_connect = mysqli_connect(
                DB_HOST,
                DB_USER,
                DB_PASSWORD,
                DB_DATABASE
            );

            if(!$db_connect){
                die('Error Connecting to the database');
            }
            return $db_connect;
        }
        public function close(){
            mysqli_close($this->connect());
        }
    }

    // $connection = new connection();
    // $con = $connection->connect();
    // if($con){
    //     echo 'success';
    // }else{
    //     echo 'failed';
    // }



?>