<?php
    session_start();
    //require '../classes/connectionClass.php';
    require '../classes/UserClass.php';

    // $con = new connection();
    // $db = $con->connect();

    // $query = "SELECT * FROM users WHERE Email_ID = '{$_SESSION['emailID']}' ";

    // //echo $_SESSION['emailID'];
    // $result = mysqli_query($db, $query);

    // $row = mysqli_fetch_array($result);

    $user = new user();

    $goinEmail = $_SESSION['emailID'];
    $user->getPreviousInfo($goinEmail);

    function update(){
        
    }


    
    
    // echo $user->getId();
    // echo '<br>';
    // echo $user->getemailId();
    // echo '<br>';
    // echo $user->getUserName();
    // echo '<br>';
    // echo $user->getName();
    // echo '<br>';
    // echo $user->getHeight();
    // echo '<br>';
    // echo $user->getWeight();
    // echo '<br>';
    // echo $user->getPhoneNumber();
    // echo '<br>';
    // echo $user->getAddress();
    // echo '<br>';
    // echo $user->getBloodGroup();
    // echo '<br>';
    // echo $user->getDoB();
    // echo '<br>';
    // echo $user->getGender();
    // echo '<br>';

    // $user->setId($row['ID']);
    // $user->setemailId($row['Email_ID']);
    // $user->setUserName($row['User_Name']);
    // $user->setName($row['Name']);
    // $user->setHeight($row['Height']);
    // $user->setWeight($row['Weight']);
    // $user->setPhoneNumber($row['Phone_Number']);
    // $user->setAddress($row['Address']);
    // $user->setBloodGroup($row['Blood_Group']);
    // $user->setDoB($row['DoB']);
    // $user->setGender($row['Gender']);



?>