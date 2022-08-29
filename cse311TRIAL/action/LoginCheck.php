<?php
    session_start();
    require '../classes/connectionClass.php';

    $Email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    //$_SESSION['emailID'] = $Email;

    $con = new connection();
    $db = $con->connect();

    $query = "SELECT Email_ID, Password FROM users WHERE Email_ID = '$Email' AND Password = '$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_num_rows($result);

    if($row==1){
        echo "('Login Successful')";
        $_SESSION['emailID'] = $Email;
    }else{
        echo "('Username / Password doesn't match')";
    }




?>