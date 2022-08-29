<?php

    require '../classes/connectionClass.php';

    $Email = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $con = new connection();
    $db = $con->connect();

    $query = "SELECT Email_ID, Password FROM users WHERE Email_ID = '$Email' AND Password = '$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_num_rows($result);

    if($row==1){
        echo "('Login Successful')";
    }else{
        echo "('Username / Password doesn't match')";
    }




?>