<?php
    session_start();
    require '../classes/connectionClass.php';

    $Email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    //$_SESSION['emailID'] = $Email;

    $con = new connection();
    $db = $con->connect();

    $query = "SELECT Email_ID, Password, User_Name FROM users WHERE Email_ID = '$Email' AND Password = '$password'";
    $result = mysqli_query($db, $query);
    
    $row = mysqli_num_rows($result);

    if($row==1){
        $info = mysqli_fetch_array($result);
        $_SESSION['username'] = $info['User_Name'];    
        $_SESSION['emailID'] = $Email;
        $_SESSION['logged_in'] = true;
        echo " <script language=javascript>
        alert('Login Successful');
        window.location.href='../congrats.php';
        </script>";
    }else {
        echo "<script language=javascript>
        alert('Username / Password doesnt match');
        window.location.href='../login.html';
        </script>";
    }
?>