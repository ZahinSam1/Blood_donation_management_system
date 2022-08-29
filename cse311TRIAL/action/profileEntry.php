<?php
    session_start();
    require '../classes/connectionClass.php';
    require '../classes/UserClass.php';
    $con = new connection();
    $db = $con->connect();

    $query = "SELECT * FROM users WHERE Email_ID = " . $_SESSION['emailID'];

    //echo $_SESSION['emailID'];
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);

    $user = new user();

    $user->setId($row['ID']);
    $user->setemailId($row['Email_ID']);
    $user->setUserName($row['User_Name']);
    $user->setName($row['Name']);
    $user->setHeight($row['Height']);
    $user->setWeight($row['Weight']);
    $user->setPhoneNumber($row['Phone_Number']);
    $user->setAddress($row['Address']);
    $user->setBloodGroup($row['Blood_Group']);
    $user->setDoB($row['Dob']);
    $user->setGender($row['Gender']);



?>